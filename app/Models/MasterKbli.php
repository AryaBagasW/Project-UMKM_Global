<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKbli extends Model
{
    protected $table = 'masterkbli';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'urai'
    ];
}
