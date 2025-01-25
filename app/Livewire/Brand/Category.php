<?php

namespace App\Livewire\Brand;

use App\Models\BrandCategory;
use Livewire\Component;

class Category extends Component
{
    public $name;
    public $description;
    public $image;
    public $is_active = true;

    protected $rules = [
        'name' => 'required|string|max:255|unique:brand_categories,name',
        'description' => 'nullable|string',
        'image' => 'nullable|string',
        'is_active' => 'boolean',
    ];

    public function create()
    {
        $this->validate();

        BrandCategory::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'is_active' => $this->is_active,
        ]);

        $this->reset();
        session()->flash('message', 'Brand Category created successfully.');
    }

    public function render()
    {
        return view('livewire.brand.category');
    }
}
