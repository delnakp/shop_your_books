<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Discount;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\ProductRequest;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{
   
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
       $this->productRepository = $productRepository;
    }

    public function add(ProductRequest $request)
    {
        
       $product = $this->productRepository->create($request);
       
       $discount = $this->productRepository->createDiscount($request, $product->id);

       $moredetail = $this->productRepository->createMoreDetail($request, $product->id);
       
       $price = $this->productRepository->createPrice($request, $product->id);

       $product_stock = $this->productRepository->createStock($request, $product->id);
        
    }
    public function edit(ProductCategory $category)
    {
        $categories = $this->subcategoryRepo->edit();
        return response()->json($category);
        return view('admin.category.edit', compact('subcategories', 'category'));
    }
}
