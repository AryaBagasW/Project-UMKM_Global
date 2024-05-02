<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSektor extends Model
{
    protected $table = 'mastersektor';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'urai'
    ];
}
