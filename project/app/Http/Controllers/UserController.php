<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    //

    public function profile($name){
        $user = User::where('name', '=', $name)->firstOrFail();
        return view('profile.users', compact('user'));
    }
}
