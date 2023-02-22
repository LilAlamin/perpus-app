<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamancontroller extends Controller
{
    public function list_peminjaman(Request $req){
        $title = "Peminjaman";
        $data=DB::select("select peminjaman.id,buku.judul as judul, anggota.nama, peminjaman.tanggal_pinjam, peminjaman.tanggal_kembali
        from peminjaman
        inner join buku on buku.kode=peminjaman.kode_buku
        inner join anggota on anggota.kode=peminjaman.kode_anggota");
        return view('peminjaman.peminjaman',['data'=>$data, 'title'=>$title,'tambah'=>$req->tambah? true : false]);
    }
    public function form_tambah(){
        $buku = DB::select("select kode from buku");
        $anggota = DB::select("select kode from anggota");
        $title = "Peminjaman";
        return view("peminjaman.tambah",['title'=>$title,'buku'=>$buku,'anggota'=>$anggota]);
    }
    public function tambah_pinjam(Request $req){
        DB::insert("Insert Into peminjaman Values(null,?,?,?,?)",
        [$req->tanggal_pinjam,$req->tanggal_kembali,$req->kode_anggota,$req->kode_buku]);
        return redirect('/peminjaman?tambah=1'); 
    }
    public function pengembalian(Request $req){
        $peminjaman = DB::select("select timestampdiff(day,tanggal_kembali,now()) as bedo,tanggal_pinjam,kode_buku,kode_anggota from peminjaman where id=?",
        [$req->id]);
        $peminjaman=$peminjaman[0];
        $bedo = $peminjaman->bedo;
        $denda = 0;
        if ($bedo > 0){
            $denda = 10000 *$bedo;
        }
        DB::insert("insert into pengembalian value(?,date(now()),?,?,?)",
        [$peminjaman->tanggal_pinjam,$denda,$peminjaman->kode_anggota,$peminjaman->kode_buku]);
        DB::delete("delete from peminjaman where id=?",[$req->id]);
        return redirect("/pengembalian");
    }

    public function list_kembali(){
        $title = "Pengembalian";
        $data=DB::select("select buku.judul,anggota.nama,pengembalian.tanggal_pinjam,pengembalian.tanggal_kembali,pengembalian.denda
        from pengembalian
        inner join buku on buku.kode=pengembalian.kode_buku
        inner join anggota on anggota.kode=pengembalian.kode_anggota");
        return view("peminjaman.pengembalian",['data'=>$data,'title'=>$title]);
    }
}
