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

        // $req->session()->put('uname', 'abc');
        // $req->session()->put('password', '1234');

        // $uname = $req->session()->get('uname');
        // $alldata = $req->session()->all();

        // $req->session()->forget('password');
        // $req->session()->flush();
        // $uname = $req->session()->pull('uname');
        // $req->session()->has('uname');

        // $req->session()->flash('cgpa', '4');
        // $req->session()->flash('dept', 'SE');
        // $cgpa = $req->session()->get('cgpa');
        // $req->session()->keep('cgpa');
        // $req->session()->reflash();

        // $req->validate([
        //     'uname' => 'required',
        //     'password' => 'required|min:5'
        // ]);

        //$v= $this->validate($req, [
        //     'uname' => 'required',
        //     'password' => 'required|min:5'
        // ]);

        // $validation = Validator::make($req->all(), [
        // 	'uname' => 'required',
        // 	'password'=> 'required|min:5'
        // ]);

        // if($validation->fails()){
        //     return back()
        //             ->with('errors', $validation->errors())
        //             ->withInput();

        // 	//return redirect()->route('login.index')->with('errors', $validation->errors());
        // }
        // $validated = $req->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

        // $results = User::all();
        // print_r($results);

        // if ($req->uname == $req->password) {
        //     $req->session()->put('uname', $req->uname);
        //     $req->session()->flash('msg', 'Login Successful');
        //     return redirect('/home');
        // } else {
        //     $req->session()->flash('msg', 'invaild username or password');
        //     return redirect('/login');
        // }

        $user = User::where('username', $req->uname)
            ->where('password', $req->password)
            ->first();
        $user->save();
        // echo $user;

        if ($user->count() > 0) {
            $req->session()->put('uname', $req->uname);
            $req->session()->flash('msg', 'Login Successful');
            return redirect('/home');
        } else {
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}