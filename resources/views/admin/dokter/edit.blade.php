@extends('main')
@section('content')
    

    <div class="container">
        <h1 class="text-center">Edit dokter</h1>
        <br>
        <a href="/dokter/" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/dokter/{{ $dokter->id }}" method="post" class="mx-2">
                    @method('PUT')
                    <div class="form-group mt-3">
                        @csrf
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter" value="{{ $dokter->nama }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="ahli">Ahli</label>
                        <input type="text" class="form-control" name="ahli" value="{{ $dokter->ahli }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat">{{ $dokter->alamat }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="{{ $dokter->telp }}">
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

                @endsection