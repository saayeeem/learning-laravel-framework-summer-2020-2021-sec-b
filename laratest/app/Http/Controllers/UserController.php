<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function details($id)
    {
        $users = $this->getUserList();
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                return view('user.details')->with('user', $u);
            }
        }
    }
    public function edit($id)
    {
        $users = $this->getUserList();
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                return view('user.edit')->with('user', $u);
            }
        }
    }
    public function update(Request $req, $id)
    {
        $users = $this->getUserList();
        $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];


        foreach ($users as $u) {
            if ($u['id'] == $req->id) {
                array_push($users, $user);
                break;
            }
        }
        return view('user.list')->with('userList', $users);
    }

    public function delete($id)
    {
        $users = $this->getUserList();
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                return view('user.delete')->with('user', $u);
            }
        }
    }

    public function destroy(Request $req, $id)
    {

        $users = $this->getUserList();
        $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];

        foreach ($users as $u) {
            if ($u['id'] == $req->id) {
                unset($users[$id - 1]);
                // array_splice($colors, 1, 1);
                break;
            }
        }

        return view('user.list')->with('userList', $users);
    }

    public function create()
    {
        return view('user.create');
    }
    public function insert(Request $req)
    {
        $users = $this->getUserList();
        $user = ['id' => $req->id, 'name' => $req->uname, 'email' => $req->email];
        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }

    public function getUserList()
    {
        return [
            ['id' => 1, 'name' => 'almain', 'email' => 'email@email.com'],
            ['id' => 2, 'name' => 'abc', 'email' => 'abc@email.com'],
            ['id' => 3, 'name' => 'xyz', 'email' => 'xyz@email.com']
        ];
    }
}