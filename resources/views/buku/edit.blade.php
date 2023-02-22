@extends('layouts.main')

@section('container')
    

    <form action="" method="post" class="form-control">
        @csrf
        <input type="hidden" name="code" value="{{ $kode }}">
        <label for="" class="form-label">Kode Buku</label>
        <br>
        <input type="text" name="kode" required>
        <br>
        <label for="" class="form-label">Judul</label>
        <br>
        <input type="text" name="judul" size="50"required>
        <br>
        <label for="" class="form-label">Penulis</label>
        <br>
        <input type="text" name="penulis">
        <br>
        <label for="" class="form-label">Penerbit</label>
        <br>
        <input type="text" name="penerbit" required>
        <br>
        <label for=""class="form-label">Tahun Terbit</label>
        <br>
        <input type="text" name="tahun_terbit" required>
        <br>
        <label for="" class="form-label">Stok</label>
        <br>
        <input type="text" name="stok">
        <button type="submit" class="btn btn-primary mt-2">Tambah Data</button>
    </form>

 @endsection