<?php

namespace App\Livewire\Social;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $platforms = ['facebook', 'instagram', 'twitter', 'linkedin'];
    public $contentTypes = [
        'facebook' => ['Feeds', 'Story'],
        'instagram' => ['Feeds', 'Story', 'Reels'],
        'twitter' => ['Feeds'],
        'linkedin' => ['Feeds']
    ];

    public $platform_id = [];
    public $content_type = [];
    public $title;
    public $file_content = [];
    public $event_date;
    public $event_time;
    public $description;
    public $image = [];
    public $is_active = true;

    public function saveEvent()
    {
        $this->validate([
            'platform_id' => 'required|array',
            'content_type' => 'required|array',
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'file_content.*' => 'nullable|file|max:10240',
            'image.*' => 'nullable|image|max:5120',
            'description' => 'nullable|string',
        ]);

        $filePaths = collect($this->file_content)->map(fn($file) => $file->store('events/files', 'public'))->toJson();
        $imagePaths = collect($this->image)->map(fn($image) => $image->store('events/images', 'public'))->toJson();

        Events::create([
            'platform_id' => json_encode($this->platform_id),
            'content_type' => json_encode($this->content_type),
            'title' => $this->title,
            'file_content' => $filePaths,
            'event_date' => $this->event_date,
            'event_time' => $this->event_time,
            'description' => $this->description,
            'image' => $imagePaths,
            'is_active' => $this->is_active,
            'user_id' => auth()->id(),
        ]);

        session()->flash('message', 'Event created successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.social.create', [
//            'socialAccounts' => SocialAccount::all()/
        ]);
    }
//    public function render()
//    {
////        $socialAccounts = SocialAccount::all();
//        return view('livewire.social.create');
//    }
}
