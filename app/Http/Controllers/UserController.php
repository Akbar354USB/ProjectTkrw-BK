<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(Request $request){
        $user = User::paginate(5);

        $filterKeyword = $request->get('name');
        if($filterKeyword){
        $user = User::where("name", "LIKE",
        "%$filterKeyword%")->paginate(5);
        }
        
        return view('Admin.User.index', compact('user'));
    }

    public function detail(){
        $user = User::all();
        
        return view('Admin.User.detail', compact('user'));
    }

    public function myprofile(){
        $user = User::all();
        
        return view('Admin.User.profile', compact('user'));
    }

    public function create(){

        return view('Admin.User.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'nama belum di masukkan',
            'email.required' => 'email belum di masukkan',
            'role.required' => 'role belum di pilih',
            'password.required' => 'password belum di masukkan'
        ]);

        $post = $request->all();
        $post['password'] = Hash::make($request->password);
        $post['photo'] = 'profile.svg';
        // dd($post);
        User::create($post);

        return redirect()->route('user-index')->with('status', 'Sukses Tambah Data User');
    }

    public function destroy($id){
        $user = User::where("id", $id)->first();
        $user->delete();

        return redirect()->route('user-index')->with('status', 'Sukses Hapus Data Kelas');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'photo' => 'mimes:png,jpeg,jpg,svg'
        ]);

        $id_user = Auth::user()->id;
        $user = User::find($id_user);

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $ubah_nama_photo = time() . $photo->getClientOriginalName();
            $photo->move('photo', $ubah_nama_photo);

            if($user->photo != 'provile.svg'){
                File::delete('photo' . $user->photo);
            }

            $user->photo = $ubah_nama_photo;
            $user->save();
        }

        $user->email = $request->email;
        $user->save();
        return redirect()->route('user-profile')->with('status', 'Sukses Update Profile');
    }

    
}
