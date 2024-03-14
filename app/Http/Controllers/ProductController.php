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
      //return response()->json();
    public function index()
    {
        $books = $this->productRepository->list();
        $i = 0;
        return view('admin.product.list', compact('books', 'i'));
    }

    public function create()
    {
        return view('admin.product.add'); 
    }

    public function add(ProductRequest $request)
    {   
       
        $product = $this->productRepository->store($request);
       return redirect()->back()->with('status', 'Successfully created new book!');
       
    //    $discount = $this->productRepository->createDiscount($request, $product->id);

    //    $moredetail = $this->productRepository->createMoreDetail($request, $product->id);
       
    //    $price = $this->productRepository->createPrice($request, $product->id);

    //    $product_stock = $this->productRepository->createStock($request, $product->id);
        
    }

    public function edit(Product $book)
    {
       return view('admin.product.edit', compact('book'));
    }

    public function update(Product $book, Request $request)
    { 
         
        $books= $this->productRepository->update($book, $request);

       return redirect()->back()->with('status', 'updated successfully!');
    }
}
