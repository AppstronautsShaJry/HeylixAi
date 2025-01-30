<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $brandCategories = BrandCategory::latest()->paginate(3);
        return view('pages.brand.category.index', compact('brandCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.brand.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255|unique:brand_categories,name',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active'   => 'boolean',
        ]);

        try {
            // Set default active status if not provided
            $validatedData['is_active'] = $request->has('is_active') ? $request->is_active : true;

            // Handle image upload
            if ($request->hasFile('image')) {
                $validatedData['image'] = $request->file('image')->store('brand_categories', 'public');
            }

            BrandCategory::create($validatedData);

            return redirect()->route('brand_categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            Log::error("Error creating category: " . $e->getMessage());
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BrandCategory $brandCategory)
    {
        return view('pages.brand.category.show', compact('brandCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BrandCategory $brandCategory)
    {
        return view('pages.brand.category.edit', compact('brandCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255|unique:brand_categories,name,' . $id,
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active'   => 'boolean',
        ]);

        try {
            // Find the category by ID
            $brandCategory = BrandCategory::findOrFail($id);

            // Set default active status if not provided
            $validatedData['is_active'] = $request->has('is_active') ? $request->is_active : true;

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($brandCategory->image && file_exists(storage_path('app/public/' . $brandCategory->image))) {
                    unlink(storage_path('app/public/' . $brandCategory->image));
                }

                // Store new image
                $validatedData['image'] = $request->file('image')->store('brand_categories', 'public');
            }

            // Update the category
            $brandCategory->update($validatedData);

            return redirect()->route('brand_categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            Log::error("Error updating category: " . $e->getMessage());
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BrandCategory $brandCategory)
    {
        try {
            // Delete the associated image if it exists
            if ($brandCategory->image) {
                Storage::disk('public')->delete($brandCategory->image);
            }

            $brandCategory->delete();

            return redirect()->route('brand_categories.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            Log::error("Error deleting category: " . $e->getMessage());
            return back()->with('error', 'Failed to delete category.');
        }
    }
}
