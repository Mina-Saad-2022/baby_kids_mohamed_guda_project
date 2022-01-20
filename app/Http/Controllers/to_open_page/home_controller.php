<?php

namespace App\Http\Controllers\to_open_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home_controller extends Controller
{
    //to open home page

    public function home_page()
    {
        return view('pages.HomePage');
    }

//to open create user page
    public function create_users()
    {
        return view('pages.CreateUsers');
    }

    //to open create user page
    public function view_users()
    {
        return view('pages.table_users');
    }
}
