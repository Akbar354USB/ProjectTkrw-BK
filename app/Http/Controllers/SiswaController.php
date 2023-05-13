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
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ],[
            'nis.required' => 'nis belum di masukkan',
            'nama.required' => 'nama siswa belum di masukkan',
            'jenis_kelamin.required' => 'jenis_kelamin belum di masukkan',
            'alamat.required' => 'alamat belum di masukkan',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa-index')->with('status', 'Sukses Tambah Data Siswa');
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

        return redirect()->route('siswa-index')->with('status', 'Sukses Update Data Kelas');
    }

    public function destroy($id){
        $siswa = Siswa::where("id", $id)->first();
        $siswa->delete();

        return redirect()->route('siswa-index')->with('status', 'Sukses Hapus Data Kelas');
    }
}
