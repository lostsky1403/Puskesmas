<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
    //method untuk menampilkan semua data dokter
{
    public function index()
    {
        $dokters = dokter::all();

        return view('admin.dokter.index', [

            'dokters' => $dokters
        ]);
    }

    public function create()
    {

        return view('admin.dokter.create');

    }

    public function store(Request $request)
    {

        //melakukan validasi data

        $request->validate([
            'nama' => 'required',
            'ahli' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);


        //insert ke table dokters
        dokter::create(
            [
                'nama' => $request->nama,
                'ahli' => $request->ahli,
                'alamat' => $request->alamat,
                'telp' => $request->telp,

            ]
        );
        return redirect('/dokter');
    }


}