<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJenis extends Model
{
    protected $table = 'masterjenis';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'urai'
    ];
}
