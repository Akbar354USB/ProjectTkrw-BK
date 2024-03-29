<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function create(){
        $siswa = Siswa::all();
        return view('Bk.Riwayat.create', compact("siswa"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_pelanggaran' => 'required',
            'skor' => 'required',
            'tanggal' => 'required',
        ],[
            'nama_pelanggaran.required' => 'nama pelanggaran belum di masukkan',
            'skor.required' => 'skor belum di masukkan',
            'tanggal.required' => 'tanggal belum di masukkan'
        ]);

        Riwayat::create($request->all());

        return redirect()->route('riwayat-index')->with('status', 'Sukses Tambah Data Riwayat');
    }

    public function index(Request $request){
        $riwayat = Riwayat::with("siswa")->paginate(5);

        $filterKeyword = $request->get('nama_pelanggaran');
        if($filterKeyword){
        $riwayat = Riwayat::where("nama_pelanggaran", "LIKE",
        "%$filterKeyword%")->paginate(5);
        }

        return view('Bk.Riwayat.index', compact("riwayat"));
    }

    public function edit($id){
        $riwayat = Riwayat::where("id", $id)->first();
        $siswa = Siswa::all();

        return view("Bk.Riwayat.edit", compact("siswa", "riwayat"));
    }

    public function update(Request $request, $id){
        $riwayat = Riwayat::where("id", $id)->first();
        $riwayat->update($request->all());

        return redirect()->route('riwayat-index')->with('status', 'Sukses Update Data Riwayat');
    }

    public function destroy($id){
        $riwayat = Riwayat::where("id", $id)->first();
        $riwayat->delete();

        return redirect()->route('riwayat-index')->with('status', 'Sukses Hapus Data Riwayat');
    }


}
