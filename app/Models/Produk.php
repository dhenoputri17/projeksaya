<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'kategori_id',
        'deskripsi_produk',
        'foto',
        'stok_awal',
        'stok_akhir',
        'stok_minimal',
        'status'
    ];
}
