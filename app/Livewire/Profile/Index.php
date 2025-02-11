<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::auth()->get();
    }

    public function render()
    {
        return view('livewire.profile.index');
    }
}
