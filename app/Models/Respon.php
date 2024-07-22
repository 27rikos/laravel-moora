<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'alternatif',
        'kriteria1',
        'kriteria2',
        'kriteria3',
        'kriteria4',
        'kriteria5',

    ];
}