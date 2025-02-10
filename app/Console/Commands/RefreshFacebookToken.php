<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Carbon\Carbon;

class RefreshFacebookToken extends Command
{
    protected $signature = 'facebook:refresh-token';
    protected $description = 'Refresh Facebook long-lived access tokens';

    public function handle()
    {
        $users = User::whereNotNull('facebook_token')->get();

        foreach ($users as $user) {
            $token = decrypt($user->facebook_token);

            $response = Http::get("https://graph.facebook.com/v18.0/oauth/access_token", [
                'grant_type' => 'fb_exchange_token',
                'client_id' => env('FACEBOOK_APP_ID'),
                'client_secret' => env('FACEBOOK_APP_SECRET'),
                'fb_exchange_token' => $token,
            ]);

            $data = $response->json();

            if (isset($data['access_token'])) {
                $user->update([
                    'facebook_token' => encrypt($data['access_token']),
                    'facebook_token_expires_at' => Carbon::now()->addDays(60),
                ]);
                $this->info("Facebook token refreshed for user ID: {$user->id}");
            } else {
                $this->error("Failed to refresh token for user ID: {$user->id}");
            }
        }
    }
}

