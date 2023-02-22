@extends('layouts.main')

@section('container')
    
<form action="" method="post" class="form-control">
    @csrf
    <label for="" class="form-label">Kode Buku</label>
    <br>
    <select name="kode_buku" id="" required>
        @foreach ($buku as $buk)
            <option value="{{ $buk ->kode }}">{{ $buk ->kode }}</option>
        @endforeach
    </select>
    <br>
    <label for="" class="form-label">Kode Anggota</label>
    <br>
    <select name="kode_anggota" id="" required>
        @foreach ($anggota as $gota)
            <option value="{{ $gota->kode }}">{{ $gota->kode }}</option>
        @endforeach
    </select>
    <br>
    <label for="" class="form-label">Tanggal Pinjam</label>
    <br>
    <input type="date" name="tanggal_pinjam" id="" required>
    <br>
    <label for="" class="form-label">Tanggal Kembali</label>
    <br>
    <input type="date" name="tanggal_kembali" required>
    <br>
    <button type="submit" class="btn btn-primary mt-2">Pinjam</button>
</form>
@endsection