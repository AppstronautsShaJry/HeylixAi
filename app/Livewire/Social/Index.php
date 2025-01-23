<?php

namespace App\Livewire\Social;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.social.index')->layout('components.layouts.app');
    }
}
