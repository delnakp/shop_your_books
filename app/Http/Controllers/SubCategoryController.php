<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Repositories\SubCategory\SubCategoryRepository;

class SubCategoryController extends Controller
{
    protected $subcategoryRepo;
    
    public function __construct(SubCategoryRepository $subcategoryRepo)
    {
        $this->subcategoryRepo = $subcategoryRepo;
    }

    public function add(CategoryRequest $request)
    {   
        
        $category['name'] = $request->sub_category;
        $category['category_id'] = $request->category;
        $status = $this->subcategoryRepo->create($category);
        if($status)
             return redirect()->back()->with('status', 'Sub-Category has been created successfully!');
        else
             return redirect()->back()->with('status', 'Sub-Category is not created!');
    }

    public function edit(SubCategory $subcategory)
    {
        $categories = $this->subcategoryRepo->edit();
        return view('admin.category.edit', compact('subcategory', 'categories'));
    }

    public function update(CategoryRequest $request, $subcategory)
    {   
        
        $category['name'] = $request->sub_category;
        $category['category_id'] = $request->category;
        $status = $this->subcategoryRepo->update($category, $subcategory);
        if($status)
             return redirect()->back()->with('status', 'Sub-Category has been updated successfully!');
        else
             return redirect()->back()->with('status', 'Sub-Category is not updated!');
    }
}
