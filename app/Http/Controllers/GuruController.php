<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function create(){
        return view('Admin.Guru.create');
    }

    public function store(Request $request){
        Guru::create($request->all());

        return redirect()->route('guru-index');
    }

    public function index(){
        $guru = Guru::all();
        
        return view('Admin.Guru.index', compact('guru'));
    }

    public function edit($id){
        $kelas = Guru::where("id", $id)->first();

        return view('Admin.Guru.edit', compact('kelas'));
    }

    public function update(Request $request, $id){
        $kelas = Guru::where("id", $id)->first();
        $kelas->update($request->all());

        return redirect()->route('guru-index');
    }

    // public function destroy($id){
    //     $kelas = Kelas::where("id", $id)->first();
    //     $kelas->delete();

    //     return redirect()->route('kelas-index');
    // }
}
