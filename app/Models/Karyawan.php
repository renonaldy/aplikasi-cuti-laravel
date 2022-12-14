<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';

    protected $fillable = [
        'user_id',
        'nik',
        'nama',
        'organisasi_area',
        'posisi',
        'alamat',
        'no_telpon',
        'jumlah_cuti'
    ];
}
