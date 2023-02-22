@extends('layouts.main')

@section('container')
    

    <form action="" method="post" class="form-control">
        @csrf
        <label for="" class="form-label">Kode Buku</label>
        <br>
        <input type="text" name="kode" required>
        <br>
        <label for="" class="form-label">Nama</label>
        <br>
        <input type="text" name="nama" required>
        <br>
        <label for="" class="form-label">Jenis Kelamin</label>
        <br>
        <input type="radio" name="jk" value="Laki-laki" required>
        <label for="" class="form-label">Laki-Laki</label>
        <br>
        <input type="radio" name="jk" value="Perempuan" required>
        <label for="" class="form-label">Perempuan</label>
        <br>
        <label for="" class="form-label">Jurusan</label>
        <br>
        <input type="text" name="jurusan" required>
        <br>
        <label for="" class="form-label">No Telepon</label>
        <br>
        <input type="text" name="no_telp" required>
        <br>
        <label for="" class="form-label">Alamat</label>
        <br>
        <input type="text" name="alamat" required>
        <br>
        <button type="submit" class="btn btn-primary mt-2">Tambah Data</button>
    </form>
    @endsection