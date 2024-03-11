<?php
namespace App\Repositories\Category;

use App\Models\ProductCategory;

class CategoryEloquent implements CategoryRepository
{
    public function destroy($category)
    {
       $to_delete =   ProductCategory::findOrFail($category); 
       return $to_delete->delete();
    }

    public function listCategory()
    {
      return  ProductCategory::with('subCategories')->get(); 
    }

    public function getCategory()
    {
       //return  ProductCategory::all(); 
       return  ProductCategory::orderBy('id', 'asc')->get(); 
    }
}