<?php

namespace App\Livewire\Social;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $platform_id;
    public $content_type = [];
    public $title;
    public $file_content = [];
    public $event_date;
    public $event_time;
    public $description;
    public $image = [];
    public $is_active = true;

    protected $rules = [
        'platform_id' => 'nullable|exists:social_accounts,id',
        'content_type' => 'nullable|array',
        'title' => 'nullable|string|max:255',
        'file_content.*' => 'nullable|file|mimes:jpg,png,jpeg,pdf,mp4|max:10240',
        'event_date' => 'nullable|date',
        'event_time' => 'nullable|date_format:H:i',
        'description' => 'nullable|string',
        'image.*' => 'nullable|image|max:10240',
        'is_active' => 'boolean',
    ];

    public function storeFiles($files, $folder)
    {
        $paths = [];
        foreach ($files as $file) {
            $paths[] = $file->store($folder, 'public');
        }
        return $paths;
    }

    public function createEvent()
    {
        $this->validate();
        $fileContentPaths = $this->storeFiles($this->file_content, 'event_files');
        $imagePaths = $this->storeFiles($this->image, 'event_images');
        Events::create([
            'platform_id' => $this->platform_id,
            'content_type' => json_encode($this->content_type),
            'title' => $this->title,
            'file_content' => json_encode($fileContentPaths),
            'event_date' => $this->event_date,
            'event_time' => $this->event_time,
            'description' => $this->description,
            'image' => json_encode($imagePaths),
            'is_active' => $this->is_active,
            'user_id' => auth()->id(),
        ]);
        session()->flash('message', 'Event created successfully.');
        $this->reset(); // Clear form
    }

    public function render()
    {
        return view('livewire.social.create');
    }

}
