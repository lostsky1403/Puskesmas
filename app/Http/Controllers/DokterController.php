<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = dokter::getALL();
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
        dd($request->all());
    }


}