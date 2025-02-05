<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    /**
     * Redirect the user to Facebook for authentication.
     */
    public function redirect()
    {
        // Request only basic permissions for development.
        // When you’re ready to request additional permissions (such as managing pages),
        // make sure they are approved by Facebook and add them here.
        return Socialite::driver('facebook')
            ->scopes(['email', 'public_profile'])
            ->stateless() // Removed pages-related scopes for now.
            ->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     */
    public function callback(Request $request)
    {
        // Check if the user canceled the login
        if ($request->has('error')) {
            return redirect('/login')->with('error', 'Facebook login was canceled.');
        }

        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            // Handle login or registration logic
            return redirect('/dashboard'); // Redirect to a dashboard or homepage
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Something went wrong. Please try again.');
        }
    }

    /**
     * Fetch Facebook Pages associated with the authenticated user.
     */
    public function getPages()
    {
        $accessToken = Session::get('facebook_access_token');

        if (!$accessToken) {
            return redirect()->route('facebook.login')->with('error', 'Facebook access token not found.');
        }

        $client = new Client();
        // Note: Fetching pages might require additional permissions.
        // Ensure you have the proper permissions before calling this endpoint.
        $response = $client->get('https://graph.facebook.com/v17.0/me/accounts', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $pages = $data['data'] ?? [];

        foreach ($pages as $page) {
            // Save or update the page info in your database.
            FacebookPage::updateOrCreate(
                ['page_id' => $page['id']],
                ['name' => $page['name'], 'access_token' => $page['access_token']]
            );
        }

        return redirect()->route('facebook')->with('success', 'Pages retrieved successfully.');
    }

    /**
     * Publish a post to a Facebook Page.
     */
    public function createPost(Request $request)
    {
        $request->validate([
            'page_id' => 'required',
            'message' => 'required',
        ]);

        $page = FacebookPage::where('page_id', $request->page_id)->first();
        if (!$page) {
            return back()->with('error', 'Page not found.');
        }

        $client = new Client();
        $response = $client->post("https://graph.facebook.com/{$page->page_id}/feed", [
            'headers'     => ['Authorization' => 'Bearer ' . $page->access_token],
            'form_params' => ['message' => $request->message],
        ]);

        return back()->with('success', 'Post published successfully.');
    }

    /**
     * Delete a Facebook post.
     */
    public function deletePost($postId, $pageId)
    {
        $page = FacebookPage::where('page_id', $pageId)->first();
        if (!$page) {
            return back()->with('error', 'Page not found.');
        }

        $client = new Client();
        $client->delete("https://graph.facebook.com/$postId", [
            'headers' => ['Authorization' => 'Bearer ' . $page->access_token],
        ]);

        return back()->with('success', 'Post deleted successfully.');
    }
}
