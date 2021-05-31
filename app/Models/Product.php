<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function images()
    {
        return $this->hasOne(ProductImage::class);
    }

    /**
     * @param string $name
     * @param int $category
     * @param string $condition
     * @param string $description
     * @param int $price
     * @return Product
     * Sada nam ovaj funkcija vraca proizvod koji je napravila
     */
    public static function addProduct(string $name, int $category,
    string $condition, string $description, int $price): Product
    {
        $uri_replace = str_replace(' ', '-', $name);

        $uri = Product::select('id')->where('uri', $uri_replace)->first();

        if($uri == null){
            return self::create([
                'name' => $name,
                'category_id' => $category,
                'product_condition' => $condition,
                'description' => $description,
                'price' => $price,
                'uri' => str_replace(' ', '-', $name)
            ]);
        }else{

            return self::create([
                'name' => $name,
                'category_id' => $category,
                'product_condition' => $condition,
                'description' => $description,
                'price' => $price,
                'uri' => str_replace(' ', '-', $name.'-'.rand(1, 100))
            ]);
        }


    }

}
