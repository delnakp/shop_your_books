<?php
namespace App\Repositories\Product;

use App\Models\Price;
use App\Models\Product;
use App\Models\Discount;
use App\Models\ProductStock;
use App\Models\ProductDetail;

class ProductEloquent implements ProductRepository
{
    public function create($validatedProduct)
    {   
        
        return Product::create(
                    [
                        'name' => $validatedProduct['name'],
                        'description' => $validatedProduct['description'],
                        'author' => $validatedProduct['author'],
                        'publisher' => $validatedProduct['publisher'],
                        'stock_status' => $validatedProduct['stock_status'],
                        'hide' => 1,
                        'shipping_days' =>1,
                        'release_date' =>  $validatedProduct['release_date']
                    ]);
    }

    public function createMoreDetail($validatedProduct, $product_id)
    {   
        return ProductDetail::create(
                    [
                        'width' => $validatedProduct['width'],
                        'height' => $validatedProduct['height'],
                        'no_of_pages' => $validatedProduct['no_of_pages'],
                        'back_cover' => $validatedProduct['back_cover'],
                        'product_id' => $product_id
                    ]);
    }

    public function createDiscount($validatedProduct, $product_id)
    {
        return Discount::create(
            [
                'disc_percentage' => $validatedProduct['discount'],
                'active' => $validatedProduct['disc_active'],
                'product_id' => $product_id
                
            ]);
    }

    public function createPrice($validatedProduct, $product_id)
    {
        return Price::create(
            [
                'mrp' => $validatedProduct['mrp'],
                'your_price' => $validatedProduct['your_price'],
                'product_id' => $product_id
                
            ]);
    }

    public function createStock($validatedProduct, $product_id)
    {
        return ProductStock::create(
            [
                'stock_quantity' => $validatedProduct['stock'],
                'available_quantity' => $validatedProduct['available'],
                'low_quantity' =>$validatedProduct['low_stock'],
                'active' => 1,
                'product_id' => $product_id
                //$validatedProduct['stock_active']
            ]);
    }


}
