<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function create(){
        return view('Admin.Peraturan.create');
    }

    public function store(Request $request){
        Peraturan::create($request->all());

        // return redirect()->route('kelas-index');
    }

    public function index(){
        // $kelas = Kelas::all();
        
        // return view('Admin.Kelas.index', compact('kelas'));
        return view('Admin.Peraturan.index');
    }

    // public function edit($id){
    //     $kelas = Kelas::where("id", $id)->first();

    //     return view('Admin.Kelas.edit', compact('kelas'));
    // }

    // public function update(Request $request, $id){
    //     $kelas = Kelas::where("id", $id)->first();
    //     $kelas->update($request->all());

    //     return redirect()->route('kelas-index');
    // }

    // public function destroy($id){
    //     $kelas = Kelas::where("id", $id)->first();
    //     $kelas->delete();

    //     return redirect()->route('kelas-index');
    // }
}
