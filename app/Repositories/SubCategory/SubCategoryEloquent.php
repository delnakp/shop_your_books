<?php

namespace App\Repositories\SubCategory;

use App\Models\SubCategory;
use App\Models\ProductCategory;
use App\Repositories\SubCategory\SubCategoryRepository;


class SubCategoryEloquent implements SubCategoryRepository
{
  public function create($subCategoryData)
  {
    return SubCategory::create($subCategoryData);
  }

  public function edit()
  {
     return ProductCategory::all();
  }

  public function update($subCategoryData, $subcategory_id)
  {
     $sub = SubCategory::findOrFail($subcategory_id);
     return $sub->update($subCategoryData);
  }
}