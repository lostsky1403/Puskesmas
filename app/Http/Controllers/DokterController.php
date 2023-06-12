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

        $validate = $request->validate([
            'nama' => 'required | min:3',
            'ahli' => 'required | min:3',
            'alamat' => 'required |',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);
        //melakukan validasi data

        // $request->validate([
        //     'nama'=> 'required',
        //     'jk'=> 'required',
        //     'tgl_lahir'=> 'required',
        //     'telp'=> 'required',
        // ]);

        //insert ke table dokters
        dokter::create($validate);
        return redirect('/dokter')->with('success', 'Data Dokter Berhasil diupdate');
    }

    public function edit($id)
    {
        $dokter = dokter::find($id);
        return view('admin.dokter.edit', [
            'dokter' => $dokter
        ]);
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'nama' => 'required | min:3',
            'ahli' => 'required ',
            'alamat' => 'required',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);

        $dokter = dokter::find($id);
        $dokter->update($validate);


        //melakukan validasi data

        // $request->validate([
        //     'nama'=> 'required',
        //     'ahli'=> 'required',
        //     'alamat'=> 'required',
        //     'telp'=> 'required',
        // ]);

        //insert ke table dokters
        return redirect('/dokter')->with('success', 'Data dokter Berhasil diupdate');
    }


    public function destroy(Request $request)
    {
        dokter::destroy($request->id);

        //kembalikan ke halaman daftar dokter
        return redirect('/dokter')->with('success', 'Data dokter berhasil dihapus');

    }
}