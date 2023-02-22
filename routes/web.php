<?php

use App\Http\Controllers\anggotacontroller;
use App\Http\Controllers\bukucontroller;
use App\Http\Controllers\peminjamancontroller;
use Illuminate\Support\Facades\Route;

//Anggota CRUD
$anggota = anggotacontroller::class;
Route::get("/anggota", [$anggota, "list_anggota"]);
Route::get("/anggota/tambah", [$anggota, "form_tambah"]);
Route::post("/anggota/tambah", [$anggota, "tambah_anggota"]);
Route::get("/anggota/edit", [$anggota, "form_edit"]);
Route::post("/anggota/edit", [$anggota, "edit_anggota"]);
Route::get("/anggota/hapus", [$anggota, "hapus_anggota"]);
Route::post("/anggota/search",[$anggota,"search_anggota"]);

//Buku CRUD
$buku = bukucontroller::class;

Route::get("/buku",[$buku,"list_buku"]);
Route::get("/buku/tambah",[$buku,"form_tambah"]);
Route::post("/buku/tambah",[$buku,"tambah_buku"]);
Route::get("/buku/edit",[$buku,"form_edit"]);
Route::post("/buku/edit",[$buku,"edit_buku"]);
Route::get("/buku/hapus",[$buku,"hapus_buku"]);
Route::post("/buku/search",[$buku,"search_buku"]);

//peminjaman 
$pinjam = peminjamancontroller::class;
Route::get("/peminjaman",[$pinjam,"list_peminjaman"]);
Route::get("/peminjaman/tambah",[$pinjam,"form_tambah"]);
Route::post("/peminjaman/tambah",[$pinjam,"tambah_pinjam"]);
Route::get("/peminjaman/pengembalian",[$pinjam,"pengembalian"]);
Route::get("/pengembalian",[$pinjam,"list_kembali"]);