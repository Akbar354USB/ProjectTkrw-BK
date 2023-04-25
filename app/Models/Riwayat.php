<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'nama_pelanggaran',
        'skor',
        'tanggal'
    ];

    public function siswas(){
        return $this->belongsTo(Siswa::class);
    }
}
