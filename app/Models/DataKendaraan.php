<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'model',
        'tahun',
        'warna',
        'nomor_polisi',
        'harga',
        'jenis_kendaraan',
    ];
}
