<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rka extends Model
{
    use HasFactory;
    protected $table = 'rka';
    protected $fillable = [
        'jenis',
        'jenis_barang',
        'kode_rekening',
        'jenis_pajak',
    ];
}
