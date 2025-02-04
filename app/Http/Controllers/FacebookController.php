<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    public function redirect() {
        return Socialite::driver('facebook')
            ->scopes(['pages_manage_posts', 'pages_read_engagement'])
            ->redirect();
    }

    // Handle Facebook Callback
    public function callback() {
        $user = Socialite::driver('facebook')->user();
        Session::put('facebook_access_token', $user->token);
        return redirect()->route('facebook.pages');
    }

    // Get Pages and Store in Database
    public function getPages() {
        $accessToken = Session::get('facebook_access_token');

        $client = new Client();
        $response = $client->get('https://graph.facebook.com/v17.0/me/accounts', [
            'headers' => ['Authorization' => 'Bearer ' . $accessToken],
        ]);

        $pages = json_decode($response->getBody(), true)['data'];

        foreach ($pages as $page) {
            FacebookPage::updateOrCreate(
                ['page_id' => $page['id']],
                ['name' => $page['name'], 'access_token' => $page['access_token']]
            );
        }

        return redirect()->route('facebook.admin')->with('success', 'Pages retrieved successfully');
    }

    // Post to Facebook Page
    public function createPost(Request $request) {
        $request->validate([
            'page_id' => 'required',
            'message' => 'required',
        ]);

        $page = FacebookPage::where('page_id', $request->page_id)->first();
        if (!$page) return back()->with('error', 'Page not found');

        $client = new Client();
        $response = $client->post("https://graph.facebook.com/{$page->page_id}/feed", [
            'headers' => ['Authorization' => 'Bearer ' . $page->access_token],
            'form_params' => ['message' => $request->message],
        ]);

        return back()->with('success', 'Post published successfully');
    }

    // Delete a Facebook Post
    public function deletePost($postId, $pageId) {
        $page = FacebookPage::where('page_id', $pageId)->first();
        if (!$page) return back()->with('error', 'Page not found');

        $client = new Client();
        $client->delete("https://graph.facebook.com/$postId", [
            'headers' => ['Authorization' => 'Bearer ' . $page->access_token],
        ]);

        return back()->with('success', 'Post deleted successfully');
    }
}
