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
        'file' => 'required|file|max:10240|mimes:jpg,jpeg,png,pdf,doc,docx',// Max 10MB in kilobytes.
    ];

    public function uploadFile()
    {
        $this->validate();
        $originalName = $this->file->getClientOriginalName();
        $fileSize = $this->file->getSize();
        $filePath = $this->file->store('uploads', 'public');
        $thumbnailPath = null;
        if (str_starts_with($this->file->getMimeType(), 'image')) {
            $thumbnailPath = $filePath;
        }
        Asset::create([
            'file_path'      => $filePath,
            'thumbnail_path' => $thumbnailPath,
            'file_name'      => $originalName,
            'file_size'      => $fileSize,
        ]);
        session()->flash('message', 'File uploaded successfully.');
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
