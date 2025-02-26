<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        $categories = Category::all();
        $category = $id ? Category::find($id) : null; // Fetch category only if ID exists
        return view('panel.category.index', compact('categories', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $formData = [
            'category' => $request->category,
        ];

        Category::create($formData);
        return back()->with('success', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $updatedData = [
            'category' => $request->category,
        ];

        $category = Category::findOrFail($category->id);
        $category->update($updatedData);
        return back()->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        if ($category) {
            $category->delete();
            return back()->with('deleted', 'Category Deleted Successfully');
        } else {
            return back()->with('error', 'Category Not Found');
        }
    }
}
