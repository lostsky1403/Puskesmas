<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    //hubungkan ke model dokter
    protected $table = 'dokters';

    //menyebutkan field yang boleh diisi
    protected $fillable = [
        'nama',
        'ahli',
        'alamat',
        'telp',
    ];
}