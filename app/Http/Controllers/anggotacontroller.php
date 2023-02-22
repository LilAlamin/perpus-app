<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class anggotacontroller extends Controller
{
    public function list_anggota(Request $req){
        $title = "Anggota";
        $data = DB::select("select * from anggota"); 
        return view('anggota.anggota', ["data" => $data,'title'=>$title,'tambah'=> $req->tambah ? true : false]);
    } 
    public function form_tambah(){
        $title = "Anggota";
        return view("anggota.tambah",['title'=>$title]);
    }
    public function tambah_anggota(Request $req){
        DB::insert("insert into anggota values (?,?,?,?,?,?)", 
        [$req->kode,$req->nama,$req->jk,$req->jurusan,$req->no_telp,$req->alamat]);

        return redirect("/anggota?tambah=1");
    }
    public function form_edit(Request $req){
        $title = "edit";
        return view("anggota.edit", ['kode' => $req->kode,'title'=>$title]);
    }
    public function edit_anggota(Request $req){
        DB::update("update anggota set kode=?, nama=?, jk=?, jurusan=?, no_telp=?, alamat=? where kode=?",
        [$req->kode,$req->nama,$req->jk,$req->jurusan,$req->no_telp,$req->alamat,$req->code]);
        return redirect("/anggota");
    }
    public function hapus_anggota(Request $req){
        DB::delete("delete from anggota where kode=?",[$req->kode]);
        return redirect('/anggota');
    }
    public function search_anggota(Request $req){
        $title = "Anggota";
        $data = DB::select("select *from anggota where nama LIKE concat('%',?,'%')",[$req->search]);
        return view('anggota.anggota',['data'=>$data, 'title'=>$title,'tambah'=>$req->tambah? true : false]);
    }   
}