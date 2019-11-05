<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
        $user = User::find($id);

        return view("update", ['user' => $user]);
    }

    public function insert(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('Email');
        $age = $request->input('age');

        $user = new User();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->vek = $age;
        $user->save();

        return response()->view('adduser');
    }

    public function update($id, Request $request3) {
        $user = User::where("id", "=", $id)->first();
        $user->update(["vek" => $request3->input('age'),
            'meno' => $request3->input('firstname'),
            'priezvisko' => $request3->input('lastname'),
            'email' => $request3->input('Email')]);

        return redirect()->action('UserController@showAll');
    }

    public function delete(Request $request1) {

        $id = $request1->input('id');
        $user = User::find($id);
        $user->delete();

        return response()->view('deleteuser');
    }

    public function showAll(){
        $users = User::all();
        return view("showall", ['users' => $users]);
    }

    public function getAddUserForm()
    {
        return view("adduser");
    }

    public function deleteuser()
    {
        return view("deleteuser");
    }



}
