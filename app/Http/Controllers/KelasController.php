<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function create(){
        return view('Admin.Kelas.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
        ],[
            'kode_kelas.required' => 'kode kelas belum di masukkan',
            'nama.required' => 'nama kelas belum di masukkan',
            'keterangan.required' => 'keterangan belum di masukkan'
        ]);

        Kelas::create($request->all());
        return redirect()->route('kelas-index');
    }

    public function index(){
        $kelas = Kelas::all();
        
        return view('Admin.Kelas.index', compact('kelas'));
    }

    public function edit($id){
        $kelas = Kelas::where("id", $id)->first();

        return view('Admin.Kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id){
        $kelas = Kelas::where("id", $id)->first();
        $kelas->update($request->all());

        return redirect()->route('kelas-index');
    }

    public function destroy($id){
        $kelas = Kelas::where("id", $id)->first();
        $kelas->delete();

        return redirect()->route('kelas-index');
    }
}
