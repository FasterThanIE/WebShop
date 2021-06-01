<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded = [];




    /**
     * @param int $product_id
     * @param string $image
     * Ova funkcija unosi slike od proizvoda koliko god ih ima u tabelu product_images
     */

    public static function addProductImages(int $product_id, string $image)
    {
        self::create([
            'product_id' => $product_id,
            'image' => $image,
        ]);
    }
}
