<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function verify(UserRequest $req)
    {


        $user = User::where('email', $req->email)
            ->where('password', $req->password)
            ->first();
        // $user->save();
        // echo $user;

        if ($user) {
            $req->session()->put('email', $req->email);
            $req->session()->put('uname', $user->username);
            $req->session()->put('type', $user->type);
            $req->session()->flash('msg', 'Login Successful');
            return redirect('/home');
        } else {
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}