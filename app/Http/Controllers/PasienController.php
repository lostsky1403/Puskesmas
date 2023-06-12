<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
    //method untuk menampilkan semua data pasien
{
    public function index()
    {
        $pasiens = Pasien::all();

        return view('admin.pasien.index', [

            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {

        return view('admin.pasien.create');

    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required ',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);
        //melakukan validasi data

        // $request->validate([
        //     'nama'=> 'required',
        //     'jk'=> 'required',
        //     'tgl_lahir'=> 'required',
        //     'telp'=> 'required',
        // ]);

        //insert ke table pasiens
        Pasien::create($validate);
        return redirect('/pasien')->with('success', 'Data Pasien Berhasil diupdate');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', [
            'pasien' => $pasien
        ]);
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required ',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validate);
        

        //melakukan validasi data

        // $request->validate([
        //     'nama'=> 'required',
        //     'jk'=> 'required',
        //     'tgl_lahir'=> 'required',
        //     'telp'=> 'required',
        // ]);

        //insert ke table pasiens
        return redirect('/pasien')->with('success', 'Data pasien Berhasil diupdate');
    }


    public function destroy(Request $request)
    {
        Pasien::destroy($request->id);

        //kembalikan ke halaman daftar pasien
        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus');

    }
}