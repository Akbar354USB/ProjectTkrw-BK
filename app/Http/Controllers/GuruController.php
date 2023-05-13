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
        $this->validate($request, [
            'kode_guru' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'telpon' => 'required',
        ],[
            'kode_guru.required' => 'kode guru belum di masukkan',
            'nama.required' => 'nama guru belum di masukkan',
            'jabatan.required' => 'jabatan belum di masukkan',
            'telpon.required' => 'telpon belum di masukkan',
        ]);
        Guru::create($request->all());

        return redirect()->route('guru-index')->with('status', 'Sukses Tambah Data Guru');
    }

    public function index(){
        $guru = Guru::paginate(5);
        
        return view('Admin.Guru.index', compact('guru'));
    }

    public function edit($id){
        $guru = Guru::where("id", $id)->first();

        return view('Admin.Guru.edit', compact('guru'));
    }

    public function update(Request $request, $id){
        $guru = Guru::where("id", $id)->first();
        $guru->update($request->all());

        return redirect()->route('guru-index')->with('status', 'Sukses Update Data Guru');
    }

    public function destroy($id){
        $guru = Guru::where("id", $id)->first();
        $guru->delete();

        return redirect()->route('guru-index')->with('status', 'Sukses Hapus Data Guru');
    }
}
