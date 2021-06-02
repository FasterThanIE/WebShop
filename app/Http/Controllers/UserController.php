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
        $user = User::findUserByUri($user_uri);

        if($user == null){
            abort(404);
        }else{
            return view('profile_user', ['user' => $user]);
        }
    }

    public function myProfileShow($user_uri)
    {
        $user = User::findUserByUri($user_uri);


        return view('my_profile', ['user' => $user]);
    }

    public function edit()
    {

        $user = User::findUserById(auth()->user()->id);

        return view('edit_profile', ['user' => $user]);
    }


    /**
     * @param ValidateUserRequest $request
     * return null
     */

    public function update(ValidateUserRequest $request)
    {

            $user_id = auth()->user()->id;

            User::updateUser($user_id, $request->name, $request->email);

            User::updateUserInfo($user_id, $request->city, $request->address, $request->state, $request->mobile_number);


            return redirect('/')->with('status', 'Profil je izmenjen!');


    }
}
