<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kelas',
        'nama',
        'keterangan',
    ];

    public function relasipelanggaran(){
        return $this->hasMany(Pelanggaran::class);
    }
}
