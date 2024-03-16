<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    //
   

    public function getUserDetails (Request $request)
    {
        // $user =  User::get()->keyBy('id'); // user preserve keys only when you want to display orignal index 
        $user =  User::get();
        // return new UserResource($user);//user UserResour when u want to return single user details
        return new UserResourceCollection($user);//user UserResourceCollection when u want to return list of users 
    }


    public function getUserDetailsByRoles (Request $request)
    {
        // $user =  User::get()->keyBy('id'); // user preserve keys only when you want to display orignal index 
        $user =  User::with('role')->get();
        // return new UserResource($user);//user UserResour when u want to return single user details
        return new UserResourceCollection($user);//user UserResourceCollection when u want to return list of users 
    }

}
