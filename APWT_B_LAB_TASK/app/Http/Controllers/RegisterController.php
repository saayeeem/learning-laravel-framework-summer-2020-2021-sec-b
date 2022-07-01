<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }
    public function register(RegisterRequest $req)
    {


        $user = new User;
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->password = $req->password;
        $user->cpassword = $req->cpassword;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->company = $req->company;
        $user->phone = $req->phone;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->type = 'user';
        // $user->profile_img = '';
        $user->save();
        return redirect()->route('login.index');
    }
}