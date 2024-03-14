<?php

namespace App\Repositories\Product;

use Illuminate\Http\Request;

interface ProductRepository
{   
    public function list();
    public function store(Request $validatedProduct);
    public function update($product_details, $request);

    // public function createDiscount(Request $validatedProduct, $product_id);
    // public function createMoreDetail(Request $validatedProduct, $product_id);
    // public function createPrice(Request $validatedProduct, $product_id); 
    // public function createStock(Request $validatedProduct, $product_id);

}