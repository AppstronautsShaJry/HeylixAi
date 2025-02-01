<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use App\Models\BrandCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $brand;
    public $name, $description, $category_id, $image, $phone, $url, $address, $city, $state, $pincode, $country, $is_active;
    public $categories = [];

    public function mount($id)
    {
        $this->brand = Brand::findOrFail($id);
        $this->categories = BrandCategory::all();
        // Populate form fields
        $this->name = $this->brand->name;
        $this->description = $this->brand->description;
        $this->category_id = $this->brand->category_id;
        $this->phone = $this->brand->phone;
        $this->url = $this->brand->url;
        $this->address = $this->brand->address;
        $this->city = $this->brand->city;
        $this->state = $this->brand->state;
        $this->pincode = $this->brand->pincode;
        $this->country = $this->brand->country;
        $this->is_active = $this->brand->is_active;
    }

    public function updateBrand()
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
            'is_active' => 'boolean',
        ]);

        // Handle file upload
        if ($this->image) {
            $imagePath = $this->image->store('brands', 'public');
        } else {
            $imagePath = $this->brand->image;
        }

        // Update Brand
        $this->brand->update([
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
            'is_active' => $this->is_active,
        ]);

        session()->flash('success', 'Brand updated successfully!');

        return redirect()->route('brand.manage'); // Ensure this route exists
    }

    public function render()
    {
        return view('livewire.brand.edit');
    }
}
