@extends('layouts.main')

@section('container')
    

    <form action="" method="post" class="form-control">
        @csrf
        <label for="" class="form-label">Kode Buku</label>
        <br>
        <input type="text" name="kode" required>
        <br>
        <label for="" class="form-label">Judul Buku</label>
        <br>
        <input type="text" name="judul" required>
        <br>
        <label for="" class="form-label">Penulis</label>
        <br>
        <input type="text" name="penulis" id="">
        <br>
        <label for="" class="form-label">Penerbit</label>
        <br>
        <input type="text" name="penerbit" required>
        <br>
        <label for="" class="form-label">Tahun Terbit</label>
        <br>
        <input type="text" name="tahun" required>
        <br>
        <label for="" class="form-label">Stok</label>
        <br>
        <input type="text" name="stok" required>
        <br>
        <button type="submit" class="btn btn-primary mt-2">Tambah Data</button>
    </form>
    @endsection