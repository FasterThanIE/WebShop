<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
    for($i = 40; $i <= 140; $i++){

        DB::table('products')
            ->insert([
                'name' => $faker->company,
                'category_id' => 1,
                'product_condition' => 'novo',
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween('500', '5000'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

        DB::table('product_images')
            ->insert([
                'product_id' => $i,
                'image' => $faker->imageUrl($width = 200, $height = 200),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
    }


    }

}
