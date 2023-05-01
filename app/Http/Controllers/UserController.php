<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('Admin.User.index', compact('user'));
    }

    public function detail(){
        $user = User::all();
        
        return view('Admin.User.detail', compact('user'));
    }
}
