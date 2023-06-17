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
        $this->validate($request, [
            'kode_peraturan' => 'required',
            'nama' => 'required',
            'skor' => 'required',
        ],[
            'kode_peraturan.required' => 'kode peraturan belum di masukkan',
            'nama.required' => 'nama peraturan belum di masukkan',
            'skor.required' => 'point pelanggaran belum di masukkan'
        ]);

        Peraturan::create($request->all());

        return redirect()->route('peraturan-index')->with('status', 'Sukses Tambah Data Peraturan');
    }

    public function index(Request $request){
        $peraturan = Peraturan::paginate(5);

        $filterKeyword = $request->get('nama');
        if($filterKeyword){
        $peraturan = Peraturan::where("nama", "LIKE",
        "%$filterKeyword%")->paginate(5);
        }
        
        return view('Admin.Peraturan.index', compact('peraturan'));
    }

    public function edit($id){
        $peraturan = Peraturan::where("id", $id)->first();

        return view('Admin.Peraturan.edit', compact('peraturan'));
    }

    public function update(Request $request, $id){
        $peraturan = Peraturan::where("id", $id)->first();
        $peraturan->update($request->all());

        return redirect()->route('peraturan-index')->with('status', 'Sukses Update Data Peraturan');
    }

    public function destroy($id){
        $peraturan = Peraturan::where("id", $id)->first();
        $peraturan->delete();

        return redirect()->route('peraturan-index')->with('status', 'Sukses Hapus Data Peraturan');
    }
}
