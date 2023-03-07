<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(){
        $kelas = Kelas::all();
        return view('Admin.Siswa.create', compact("kelas"));
    }

    public function store(Request $request){
        Siswa::create($request->all());

        return redirect()->route('siswa-index');
    }

    public function index(){
        $siswa = Siswa::with("kelas")->paginate(5);

        return view('Admin.Siswa.index', compact("siswa"));
    }

    public function edit($id){
        $siswa = Siswa::where("id", $id)->first();
        $kelas = Kelas::all();

        return view("Admin.Siswa.edit", compact("siswa", "kelas"));
    }

    public function update(Request $request, $id){
        $siswa = Siswa::where("id", $id)->first();
        $siswa->update($request->all());

        return redirect()->route('siswa-index');
    }

    public function destroy($id){
        $siswa = Siswa::where("id", $id)->first();
        $siswa->delete();

        return redirect()->route('siswa-index');
    }
}
