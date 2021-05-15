<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_buku',
        'kategory_id',
        'harga_buku',
        'deskripsi_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_terbit',
        'gambar_buku'
    ];
}
