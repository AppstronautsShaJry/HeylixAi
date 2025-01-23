<?php

namespace App\Livewire\Social;

use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.social.post')->layout('components.layouts.app');
    }
}
