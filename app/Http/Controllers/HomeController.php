<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Riwayat;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $riwayat = Riwayat::all();

        return view('Admin.dashboard.home', compact("siswa","guru","riwayat"));
    }
}
