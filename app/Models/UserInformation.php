<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserInformation extends Model
{
    use HasFactory;

    protected $guarded = [];



    public static function uriExist(array $data, int $user_id)
    {
        $uri_replace = str_replace(' ', '-', $data['name']);

        $uri = User::findUserByUri($uri_replace);


        if(!$uri instanceof User){

            return UserInformation::create([
                'city' => $data['city'],
                'user_id' => $user_id,
                'address' => $data['address'],
                'state' => $data['state'],
                'mobile_number' => $data['mobile_number']
            ]);
        }else {

            return UserInformation::create([
                'city' => $data['city'],
                'user_id' => $user_id,
                'address' => $data['address'],
                'state' => $data['state'],
                'mobile_number' => $data['mobile_number']
            ]);

        }



    }



    public static function userInfoSeeder($faker)
    {
        return $user_info = DB::table('user_information')->insert([

            'address' => $faker->address,
            'city' => $faker->city,
            'user_id' => 5,
            'state' => $faker->state,
            'mobile_number' => $faker->phoneNumber,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }



}
