@extends('layouts.main')

@section('container')
<table class="table table-hovered table-bordered">
    <tr class="table table-dark">
        <th>Judul Buku</th>
        <th>Nama Anggota</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Denda</th>
    </tr>
    @foreach ($data as $dat)
        <tr>
            <td>{{ $dat->judul }}</td>
            <td>{{ $dat->nama }}</td>
            <td>{{ $dat->tanggal_pinjam }}</td>
            <td>{{ $dat->tanggal_kembali }}</td>
            <td>Rp {{ $dat->denda }}</td>
        </tr>
    @endforeach
</table>
@endsection