<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i <= 100; $i++){

            $uri = $faker->name();
        DB::table('users')
            ->insert([
                'name' => $uri,
                'email' => $faker->email,
                'uri' => str_replace(' ', '-', $uri),
                'password' => $faker->password(),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

        }
    }
}
