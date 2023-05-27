<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Riwayat;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LaporanControlller extends Controller
{
    public function create(){
        $siswa = Siswa::all();
        $riwayat = Riwayat::all();
        return view('Bk.Laporan.create', compact("siswa", "riwayat"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nomor' => 'required',
            'siswa_id' => 'required',
            'riwayat_id' => 'required',
            'keterangan' => 'required',
        ],[
            'nomor.required' => 'nomor belum di masukkan',
            'siswa_id.required' => 'nama siswa belum di masukkan',
            'riwayat_id.required' => 'pelanggaran belum di masukkan',
            'keterangan' => 'keterangan belum di masukkan',
        ]);
        Laporan::create($request->all());
        return redirect()->route('laporan-index')->with('status', 'Sukses Tambah Data Siswa');
    }

    public function index(){
        $laporan = Laporan::with("siswa","riwayat")->paginate(5);

        return view('Bk.Laporan.index', compact("laporan"));
    }

    // public function edit($id){
    //     $siswa = Siswa::where("id", $id)->first();
    //     $kelas = Kelas::all();

    //     return view("Admin.Siswa.edit", compact("siswa", "kelas"));
    // }

    // public function update(Request $request, $id){
    //     $siswa = Siswa::where("id", $id)->first();
    //     $siswa->update($request->all());

    //     return redirect()->route('siswa-index')->with('status', 'Sukses Update Data Kelas');
    // }

    // public function destroy($id){
    //     $siswa = Siswa::where("id", $id)->first();
    //     $siswa->delete();

    //     return redirect()->route('siswa-index')->with('status', 'Sukses Hapus Data Kelas');
    // }
}
