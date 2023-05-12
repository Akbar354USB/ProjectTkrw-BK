<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function create(){

        return view('Admin.User.create');
    }

    public function store(Request $request){
        $post = $request->all();
        $post['password'] = Hash::make($request->password);
        $post['photo'] = 'profile.svg';
        // dd($post);
        User::create($post);

        return redirect()->route('user-index');
    }

    public function destroy($id){
        $user = User::where("id", $id)->first();
        $user->delete();

        return redirect()->route('user-index');
    }
}
