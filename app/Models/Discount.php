<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [ 'disc_percentage', 'product_id', 'active'];

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}

