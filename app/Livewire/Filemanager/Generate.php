<?php

namespace App\Livewire\Filemanager;

use App\Models\Asset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;


class Generate extends Component
{
    public $prompt;
    public $imageUrl;
    public $isProcessing = false;

    public function generateAndStoreImage()
    {
        $this->isProcessing = true;

        try {
            // Step 1: Generate Image using OpenAI API (DALL·E)
            $imageUrl = $this->generateImageWithDALL_E($this->prompt);

            // Step 2: Download the image from the URL
            $imageData = file_get_contents($imageUrl);

            // Step 3: Store the image locally
            $imagePath = Storage::disk('public')->put('assets/generated_image.jpg', $imageData);
            $filePath = storage_path("app/public/assets/generated_image.jpg");

            // Step 4: Create the thumbnail
            $thumbnail = Image::make($filePath)->resize(100, 100);
            $thumbnailPath = storage_path('app/public/assets/thumbnail_generated_image.jpg');
            $thumbnail->save($thumbnailPath);

            // Step 5: Store the image details in the database
            $this->storeInDatabase($filePath, $thumbnailPath);

            // Step 6: Update UI with the generated image URL
            $this->imageUrl = asset('storage/assets/generated_image.jpg');
        } catch (\Exception $e) {
            Log::error('Error generating or storing image: ' . $e->getMessage());
            $this->addError('image_generation', 'There was an error generating the image.');
        }

        $this->isProcessing = false;
    }

    public function generateImageWithDALL_E($prompt)
    {
        // Step 1: Get the API key from the environment
        $apiKey = env('OPENAI_API_KEY');

        // Step 2: Make the API call to OpenAI's DALL·E API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/images/generations', [
            'prompt' => $prompt,
            'n' => 1,
            'size' => '1024x1024',
        ]);

        // Step 3: Check the API response
        if ($response->successful()) {
            $data = $response->json();
            return $data['data'][0]['url'];  // URL of the generated image
        }

        // If the API call fails
        throw new \Exception('Failed to generate image.');
    }

    public function storeInDatabase($imagePath, $thumbnailPath)
    {
        $fileName = basename($imagePath);
        $fileSize = filesize($imagePath);
        $thumbnailFileName = basename($thumbnailPath);
        $updatedAt = now();  // Get current timestamp

        DB::table('assets')->insert([
            'file_path' => $imagePath,
            'thumbnail_path' => $thumbnailPath,
            'file_name' => $fileName,
            'file_size' => $fileSize,
            'updated_at' => $updatedAt,
        ]);
    }
    public function render()
    {
        return view('livewire.filemanager.generate');
    }
}
