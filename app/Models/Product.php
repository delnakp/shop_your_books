<?php

namespace App\Models;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'category_id', 'sub_category_id'];

    public function discount()
    {
        $this->hasOne(Discount::class);
    } 
}

