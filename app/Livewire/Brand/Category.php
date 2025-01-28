<?php

namespace App\Livewire\Brand;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\BrandCategory;

class Category extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $is_active = true;

    protected $rules = [
        'name' => 'required|string|unique:brand_categories,name|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'is_active' => 'boolean',
    ];

    public function save()
    {
        $this->validate();
        $imagePath = $this->image ? $this->image->store('brand_categories', 'public') : null;
        BrandCategory::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $imagePath,
            'is_active' => $this->is_active ?: true,
        ]);
        session()->flash('success', 'Brand category created successfully.');
        $this->resetFields();

        $this->emit('closeModal');
    }
    public function resetFields()
    {
        $this->reset(['name', 'description', 'image', 'is_active']);
    }

    public function render()
    {
        return view('livewire.brand.category');
    }
}
