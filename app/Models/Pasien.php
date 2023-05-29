<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getALL()
    {
        return [
            ['nama' => 'Udin', 'jk' => 'L', 'tgl_lahir' => '12/06/2002', 'alamat' => 'Bogor', 'telp' => '081952735707'],
            ['nama' => 'Siti', 'jk' => 'P', 'tgl_lahir' => '01/10/2003', 'alamat' => 'Depok', 'telp' => '081952735707'],
            ['nama' => 'Ali', 'jk' => 'L', 'tgl_lahir' => '14/06/2001', 'alamat' => 'Jakarta', 'telp' => '081952735707'],

        ];
    }
}