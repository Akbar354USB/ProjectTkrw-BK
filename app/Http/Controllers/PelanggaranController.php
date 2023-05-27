<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function create(){
        $kelas = Kelas::all();
        return view('Bk.Pelanggaran.create', compact("kelas"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_pelanggaran' => 'required',
            'nama_siswa' => 'required',
        ],[
            'nama_pelanggaran.required' => 'nama pelanggaran belum di masukkan',
            'nama_siswa.required' => 'nama siswa kelas belum di masukkan',
        ]);

        Pelanggaran::create($request->all());

        return redirect()->route('pelanggaran-index')->with('status', 'Sukses Tambah Data Pelanggaran');
    }

    public function index(){
        $pelanggaran = Pelanggaran::with("kelas")->paginate(5);

        return view('Bk.Pelanggaran.index', compact('pelanggaran'));
    }

    public function edit($id){
        $pelanggaran = Pelanggaran::where("id", $id)->first();
        $kelas = Kelas::all();

        return view("Bk.Pelanggaran.edit", compact("pelanggaran", "kelas"));
    }

    public function update(Request $request, $id){
        $pelanggaran = Pelanggaran::where("id", $id)->first();
        $pelanggaran->update($request->all());

        return redirect()->route('pelanggaran-index')->with('status', 'Sukses Update Data Pelanggaran');
    }

    public function destroy($id){
        $pelanggaran = Pelanggaran::where("id", $id)->first();
        $pelanggaran->delete();

        return redirect()->route('pelanggaran-index')->with('status', 'Sukses Hapus Data Pelanggaran');
    }
}
