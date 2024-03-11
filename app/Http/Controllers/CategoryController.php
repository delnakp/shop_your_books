<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\SubCategory;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{   

    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    { 
        $categories = $this->categoryRepo->listCategory();
        $i=0;
        return view('admin.category.list', compact('categories', 'i'));
    }

    public function delete($category)
    {
        $categories = $this->categoryRepo->destroy($category);
        return redirect()->back()->with('status', 'Successfully deleted!');

    }

    public function getAllCategory()
    {
        $category = $this->categoryRepo->getCategory();
        return view('admin.category.add', compact('category'));
    }

    
}
    
