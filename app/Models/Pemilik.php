<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $fillable = [
        'pemilik_nama',
        'pemilik_nik',
        'pemilik_alamat'
    ];
}
