<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    public static function getALL()
    {
        return [
            ['nama' => 'Asep', 'ahli' => 'Bedah', 'alamat' => 'Bogor', 'telp' => '081952735707'],
            ['nama' => 'Ujank', 'ahli' => 'Dermatologi', 'alamat' => 'Depok', 'telp' => '081952735707'],
            ['nama' => 'Badru', 'ahli' => 'THT', 'alamat' => 'Jakarta', 'telp' => '081952735707'],

        ];
    }
}