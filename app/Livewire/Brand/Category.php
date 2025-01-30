<?php

namespace App\Livewire\Brand;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\BrandCategory;

class Category extends Component
{
    use WithFileUploads;

    public $brandCategoryId, $name, $description, $image, $is_active = true;
    public $imagePreview;

    protected $rules = [
        'name' => 'required|unique:brand_categories,name,' . 'id',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:1024',
        'is_active' => 'boolean',
    ];

    protected $listeners = ['openModal' => 'editCategory'];

    public function createCategory()
    {
        $this->reset();
        $this->dispatchBrowserEvent('open-modal');
    }

    public function editCategory($id)
    {
        $brandCategory = BrandCategory::findOrFail($id);
        $this->brandCategoryId = $brandCategory->id;
        $this->name = $brandCategory->name;
        $this->description = $brandCategory->description;
        $this->is_active = $brandCategory->is_active;
        $this->imagePreview = $brandCategory->image;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'is_active' => $this->is_active,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('brand_categories', 'public');
        }

        if ($this->brandCategoryId) {
            BrandCategory::find($this->brandCategoryId)->update($data);
            session()->flash('message', 'Brand category updated successfully.');
        } else {
            BrandCategory::create($data);
            session()->flash('message', 'Brand category created successfully.');
        }

//        $this->dispatchBrowserEvent('close-modal');
        $this->reset();
    }

    public function test()
    {
        dd('clicked');
    }
    public function render()
    {
        return view('livewire.brand.category')->layout('components.layouts.app');
    }
}
