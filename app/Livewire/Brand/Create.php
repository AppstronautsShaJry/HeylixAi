<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use App\Models\BrandCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $name, $description, $category_id, $image, $phone, $url, $address, $city, $state, $pincode, $country, $is_active = true;
    public $categories = [];

    public function mount()
    {
        $this->categories = \App\Models\BrandCategory::get();; // Fetch categories once
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:brand_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:15',
            'url' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'pincode' => 'nullable|string|max:10',
            'country' => 'nullable|string',
            'is_active' => 'sometimes|boolean',
        ]);

        $imagePath = $this->image ? $this->image->store('brands', 'public') : null;

        Brand::create([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'image' => $imagePath,
            'phone' => $this->phone,
            'url' => $this->url,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'pincode' => $this->pincode,
            'country' => $this->country,
            'user_id' => auth()->id(),
            'is_active' => $this->is_active ?: 1,
        ]);

        session()->flash('success', 'Brand created successfully!');

        // Reset form fields
        $this->reset(['name', 'description', 'category_id', 'image',
            'phone', 'url', 'address',
            'city', 'state',
            'pincode', 'country']);

        return redirect()->route('brand.create'); // Adjust to your actual route
    }


    public function render()
    {
//        $this->category();
        return view('livewire.brand.create');
    }
}
