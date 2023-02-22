<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class bukucontroller extends Controller
{   
    //fungsi menampilkan list buku yang ada di database
    public function list_buku(Request $req){
        $title = "Buku";
        $data=DB::select("select * from buku");
        return view('buku.buku',['data'=>$data, 'title'=>$title,'tambah'=>$req->tambah? true : false]);
        //req tambah digunakan untuk memunculkan notif jika berhasil menambahh kan data
    }
    //mengambil data dari form tambah buku
    public function form_tambah(){
        $title = "Buku";
        return view("buku/tambah",['title'=>$title]);
    }
    //memasukkan inputan dari form buku ke database
    public function tambah_buku(Request $req){
        DB::insert("Insert Into Buku Values(?,?,?,?,?,?)",
        [$req->kode,$req->judul,$req->penulis,$req->penerbit,$req->tahun,$req->stok]);
        return redirect('/buku?tambah=1');
    }
    //Mengambil Data dari Kode Buku Yang dipilih
    public function form_edit(Request $req){
        $title = "edit";
        return view("buku.edit", ['kode' => $req->kode,'title'=>$title]);
    }
    public function edit_buku(Request $req){
        DB::update("update buku set kode=?, judul=?, penulis=?, penerbit=?, tahun=?, stok=? where kode=?",
        [$req->kode,$req->judul,$req->penulis,$req->penerbit,$req->tahun_terbit,$req->stok,$req->code]);
        return redirect("/buku");
    }
    //menghapus data buku menurut kode yang dipilih
    public function hapus_buku(Request $req){
        DB::delete("delete from buku where kode=?",[$req->kode]);
        return redirect("/buku");
    }

    //fungsi search bar buku bro
    public function search_buku(Request $req){
        $title = "Buku";
        $data=DB::select("select * from buku where judul Like concat('%',?,'%')",[$req->search]);
        return view('buku.buku',['data'=>$data, 'title'=>$title,'tambah'=>$req->tambah? true : false]);
    }
}
