<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi'; 

    protected $fillable = [
        'id_provinsi',
        'nama_provinsi',
    ];

    // Tambahkan relasi jika diperlukan
    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class, 'id_provinsi', 'id');
    }
}
