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
        // Check if image is uploaded
        $imagePath = null;
        if ($this->image) {
            // Store image in 'brands' directory under 'public' disk
            $imagePath = $this->image->store('brands', 'public');
        }

        // Create the brand record
        Brand::create([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'phone' => $this->phone,
            'url' => $this->url,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'pincode' => $this->pincode,
            'country' => $this->country,
            'is_active' => $this->is_active,
            'image' => $imagePath,
        ]);

        // Clear input fields after saving
        $this->reset();

        // Notify success
        session()->flash('message', 'Brand created successfully.');
    }


    public function render()
    {
//        $this->category();
        return view('livewire.brand.create');
    }
}
