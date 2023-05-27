<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor',
        'siswa_id',
        'riwayat_id',
        'keterangan'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function riwayat(){
        return $this->belongsTo(Riwayat::class);
    }
}
