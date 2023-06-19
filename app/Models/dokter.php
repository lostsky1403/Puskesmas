<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    //hubungkan ke model dokter
    protected $table = 'dokters';
    protected $guarded = ['id'];


    //menyebutkan field yang boleh diisi
    protected $fillable = [
        'nama',
        'ahli',
        'alamat',
        'telp',
    ];

    //menghubungkan ke model pasien
    //1 dokter bisa memiliki banyak pasien
    public function pasien()
    {
        //karena dokter menitipkan id ke pasien
        //maka dokter menghubungkan menggunakan has + kardinalitas
        //kardinalitas to many dari model ini ke model lain : hasMany
        // one to one ke model lain : hasOne
        return $this->hasMany(pasien::class);
    }

}