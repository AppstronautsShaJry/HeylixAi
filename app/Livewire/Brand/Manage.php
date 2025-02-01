<?php

namespace App\Livewire\Brand;

use Livewire\Component;

class Manage extends Component
{
public $brands;
    public function mount()
    {

        $this->brands = \App\Models\Brand::get();
    }

    public function render()
    {
        return view('livewire.brand.manage')->with([
            'brands' => $this->brands
        ]);
    }
}
