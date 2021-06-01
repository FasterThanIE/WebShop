<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUserRequest;
use App\Models\Product;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

use Symfony\Component\Routing\DependencyInjection;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        return view('welcome', ['categories' => $categories, 'users' => $users]);
    }


    public function show($user_uri)
    {
        $user_id = User::select('id')->where('uri', $user_uri)->first();
//
        $user = User::find($user_id->id);
//
//        $user_products = $user->products;
//        dd($user);

        return view('profile_user', ['user' => $user]);
    }

    public function myProfileShow($user_uri)
    {
        $user_id = User::select('id')->where('uri', $user_uri)->first();
        $user = User::find($user_id->id);

        return view('my_profile', ['user' => $user]);
    }

    public function edit($id)
    {

        $user = User::find($id);

        return view('edit_profile', ['user' => $user]);
    }


    /**
     * @param ValidateUserRequest $request
     * return null
     */

    public function update(ValidateUserRequest $request)
    {
        if(auth()->user()->id == $request->user_id){

            User::updateUser($request->user_id, $request->name, $request->email);

            User::updateUserInfo($request->user_id, $request->city, $request->address, $request->state, $request->mobile_number);


            return redirect('/')->with('status', 'Profil je izmenjen!');
        }else{
            dd('Id nije dobar');
        }

    }
}
