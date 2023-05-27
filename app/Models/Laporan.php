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
        'pelanggaran_id',
        'keterangan'

    ];

    public function siswas(){
        return $this->belongsTo(Siswa::class);
    }

    public function pelanggaran(){
        return $this->belongsTo(Pelanggaran::class);
    }
}
