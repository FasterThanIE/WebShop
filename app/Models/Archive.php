<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * @param int $user_id
     * @param int $product_id
     * @param int $category_id
     * @param string $product_condition
     * @param string $price
     * @return Archive|null
     * Ova funkcija vraca arhivirane podatke o proizvodu u archive tabelu
     */
    public static function archive(int $user_id, int $product_id, int $category_id,
                                   string $product_condition, string $price): ?Archive
    {
       return self::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'category_id' => $category_id,
            'product_condition' => $product_condition,
            'price' => $price
        ]);
    }
}
