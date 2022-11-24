<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->get();
        return view('user.index',compact('data'));
    }
}
