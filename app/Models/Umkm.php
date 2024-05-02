<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
    protected $primarykey = "id_umkm";
    /*protected $foreignkey = [
        'sektor_umkm',
        'jenis_umkm',
        'kbli_umkm',
        'id_pemilik'
    ]*/
    protected $fillable = [
        'nama_umkm',
        'alamat',
        'tgl_berdiri',
        'no_telp',
        'nib',
        'npwp'
    ];

    public function sektor()
    {
        return $this->belongsTo(Sektor::class, 'sektor_umkm', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_umkm', 'id');
    }

    public function kbli()
    {
        return $this->belongsTo(Kbli::class, 'kbli_umkm', 'id');
    }

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'id_pemilik', 'id');
    }
}
