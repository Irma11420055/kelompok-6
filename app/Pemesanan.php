<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_buku',
        'fullname',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'jumlah',
        'pengiriman',
        'status',
    ];
}
