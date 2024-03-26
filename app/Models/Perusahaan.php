<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    public $timestamps = false;
    protected $fillable = [
        'NIB',
        'NPWP',
        'Nama',
        'jenis_perusahaan_id',
    ];
}