<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        $users = User::all();
        // $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function details($id)
    {
        // $users = $this->getUserList();
        // foreach ($users as $u) {
        //     if ($u['id'] == $id) {
        //         return view('user.details')->with('user', $u);
        //     }
        // }
        $user = User::find($id);
        return view('user.details')->with('user', $user);
    }
    public function edit($id)
    {
        // $users = $this->getUserList();
        // foreach ($users as $u) {
        //     if ($u['id'] == $id) {
        //         return view('user.edit')->with('user', $u);
        //     }
        // }
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }
    public function update(Request $req, $id)
    {
        // $users = $this->getUserList();
        // $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];


        // foreach ($users as $u) {
        //     if ($u['id'] == $req->id) {
        //         array_push($users, $user);
        //         break;
        //     }
        // }
        $user = User::find($id);
        $user->username = $req->username;
        // $user->password = $req->password;
        $user->email = $req->email;
        $user->name = $req->name;
        // $user->type = $req->type;
        $user->save();
        return redirect()->route('user.index');
        // return view('user.list')->with('userList', $users);
    }

    public function delete($id)
    {
        // $users = $this->getUserList();
        // foreach ($users as $u) {
        //     if ($u['id'] == $id) {
        //         return view('user.delete')->with('user', $u);
        //     }
        // }
        $user = User::find($id);
        return view('user.delete')->with('user', $user);
    }


    public function destroy(Request $req, $id)
    {

        // $users = $this->getUserList();
        // $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];

        // foreach ($users as $u) {
        //     if ($u['id'] == $req->id) {
        //         unset($users[$id - 1]);
        //         // array_splice($colors, 1, 1);
        //         break;
        //     }
        // }

        // return view('user.list')->with('userList', $users);

        User::destroy($id);
        return redirect()->route('user.index');
    }

    public function create()
    {
        return view('user.create');
    }
    public function insert(Request $req)
    {
        // $users = $this->getUserList();
        // $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];
        // array_push($users, $user);
        // return view('user.list')->with('userList', $users);

        //image upload
        // if ($req->hasFile('image')) {

        //     $file = $req->file('image');
        //     echo "File Name: " . $file->getClientOriginalName() . "<br>";
        //     echo "File Extension: " . $file->getClientOriginalExtension() . "<br>";
        //     echo "File Mime Type: " . $file->getMimeType() . "<br>";
        //     echo "File Size: " . $file->getSize() . "<br>";

        //     if ($file->move('upload', 'abc.' . $file->getClientOriginalExtension())) {
        //         echo "success";
        //     } else {
        //         echo "error";
        //     }
        // }

        $user = new User;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->email = $req->email;
        // $user->dept = $req->dept;
        // $user->cgpa = '4';
        $user->type = 'user';
        // $user->profile_img = '';
        $user->save();
        return redirect()->route('user.index');
    }


    // public function getUserList()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'almain', 'email' => 'email@email.com'],
    //         ['id' => 2, 'name' => 'abc', 'email' => 'abc@email.com'],
    //         ['id' => 3, 'name' => 'xyz', 'email' => 'xyz@email.com']
    //     ];
    // }
}