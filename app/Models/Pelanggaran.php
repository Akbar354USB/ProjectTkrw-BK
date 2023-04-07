<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelanggaran',
        'nama_siswa',
        'tanggal',
        'kelas_id',
        
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
