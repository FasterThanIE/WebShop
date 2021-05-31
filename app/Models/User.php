<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }




    /**
     * Ova funkcija proverava da li postoji isti URI i unosi novog usera u tabelu
     * @param array $data
     * @return
     */

    public static function uriExist(array $data)
    {
        $uri_replace = str_replace(' ', '-', $data['name']);

        $uri = User::select('id')->where('uri', $uri_replace)->first();


        if($uri == null){

            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'uri' => str_replace(' ', '-', $data['name']),
                'password' => Hash::make($data['password']),
            ]);
        }else {

            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'uri' => str_replace(' ', '-', $data['name'].'-'.rand(1, 100)),
                'password' => Hash::make($data['password']),
            ]);

        }

    }
}
