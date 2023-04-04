<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pelanggaran',
        'nama_pelanggaran',
        'tanggal',
        'siswa_id',
        
    ];

    public function relasisiswa(){
        return $this->belongsTo(Pelanggaran::class);
    }
}
