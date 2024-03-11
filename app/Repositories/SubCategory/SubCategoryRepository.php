<?php
namespace App\Repositories\SubCategory;

interface SubCategoryRepository
{
    public function create($subCategoryData);
    public function edit();
    public function update($subCategoryData, $subcategory_id);
}