<?php

namespace App\Livewire\Filemanager;

use App\Models\Asset;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    // This property will hold the uploaded file.
    public $file;

    // Retrieve assets in real-time.
    public $assets;

    // Validation rules
    protected $rules = [
        'file' => 'required|file|max:10240', // Max 10MB in kilobytes.
    ];

    public function uploadFile()
    {
        // Validate the file
        $this->validate();

        // Retrieve file details.
        $originalName = $this->file->getClientOriginalName();
        $fileSize     = $this->file->getSize();

        // Store the file in the "uploads" directory within the "public" disk.
        $filePath = $this->file->store('uploads', 'public');
        // Determine a thumbnail path. For images, you might generate a thumbnail.
        $thumbnailPath = null;
        if (str_starts_with($this->file->getMimeType(), 'image')) {
            // For demonstration, we’re reusing the same file as the thumbnail.
            // In production, generate a proper thumbnail image.
            $thumbnailPath = $filePath;
        }
        // Create a new asset record in the database.
        Asset::create([
            'file_path'      => $filePath,
            'thumbnail_path' => $thumbnailPath,
            'file_name'      => $originalName,
            'file_size'      => $fileSize,
        ]);
        session()->flash('message', 'File uploaded successfully.');
        // Reset the file property to clear the input.
        $this->reset('file');
    }

    public function deleteAsset($id)
    {
        $asset = Asset::findOrFail($id);

        // Optionally remove the file and thumbnail from storage.
        if (Storage::disk('public')->exists($asset->file_path)) {
            Storage::disk('public')->delete($asset->file_path);
        }
        if ($asset->thumbnail_path && Storage::disk('public')->exists($asset->thumbnail_path)) {
            Storage::disk('public')->delete($asset->thumbnail_path);
        }

        // Delete the asset record.
        $asset->delete();

        session()->flash('message', 'Asset deleted successfully.');
    }

    public function render()
    {
        $this->assets = Asset::orderBy('updated_at', 'desc')->get();
        return view('livewire.filemanager.index');
    }
}
