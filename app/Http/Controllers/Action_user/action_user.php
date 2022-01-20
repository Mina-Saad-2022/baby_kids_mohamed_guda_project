<?php

namespace App\Http\Controllers\Action_user;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class action_user extends Controller
{
    // to insert tne new users create in database
    public function create_new_user(Request $request)
    {

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect(route('table_users'));

    }
    public function all_create(){
        $users = User::get();

        return view('pages.table_users',compact('users'));
    }
}
