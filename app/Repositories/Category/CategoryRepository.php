<?php
namespace App\Repositories\Category;

interface CategoryRepository
{
    //public function create($requestData);
    public function getCategory(); // to get all category
    public function listCategory();
    public function destroy($category);
}