<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function images()
    {
        return $this->hasMany(ProductImage::class);
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


    /**
     * @param string $uri
     * @return Product|null
     * ova funkcija vraca ceo Proizvod preko njegovog uri-a
     */

    public static function findProductByUri(string $uri): ?Product
    {
        return self::where('uri', $uri)->first();
    }


    /**
     * @param int $id
     * @param int $category
     * @param string $name
     * @param string $condition
     * @param string $description
     * @param string $price
     * @return mixed
     */
    public static function updateProduct(int $id, int $category, string $name,
                                         string $condition, string $description, string $price)

    {
        return Product::where('id', $id)
            ->update([
                'category_id' => $category,
                'name' => $name,
                'product_condition' => $condition,
                'description' => $description,
                'price' => $price,
            ]);

    }


    /**
     * @param int $product_id
     * @return int
     */
    public static function returnedProduct(int $product_id)
    {
        return $product_id;
    }

    public static function findProduct(int $product_id)
    {
       return Product::find($product_id);
    }


    /**
     * @param int $id
     * @return mixed
     */
    public static function destroyProduct(int $id)
    {
        $product = Product::find($id);

        return $product->delete();
    }




}
