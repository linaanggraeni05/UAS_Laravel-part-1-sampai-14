<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index($nama)
    {
        return $nama;
    }

    public function formulir()
    {
        // Mengembalikan tampilan formulir
        return view('formulir');
    }

    public function proses(Request $request)
    {
        // Memproses data yang dikirimkan dari formulir
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        
        // Menampilkan hasil proses
        return "Nama: " . $nama . ", Alamat: " . $alamat;
    }

    public function getpegawai()
    {
        // Mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        // Mengirim data pegawai ke view 'index'
        return view('index', ['pegawai' => $pegawai]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {// memanggil view tambah
        return view('tambah');
    }
    
    // method untuk insert data ke table pegawai
public function store(Request $request)
{
// insert data ke table pegawai1
DB::table('pegawai')->insert([
    'pegawai_id' => $request ->id,
'pegawai_nama' => $request->nama,
'pegawai_jabatan' => $request->jabatan,
'pegawai_umur' => $request->umur,
'pegawai_alamat' => $request->alamat
]);
// alihkan halaman ke halaman pegawai
return redirect('/pegawai');
 
}
  
// method untuk edit data pegawai
public function edit($id)
{
// mengambil data pegawai berdasarkan id yang dipilih
    $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
// passing data pegawai yang didapat ke view edit.blade.php
    return view('edit',['pegawai' => $pegawai]);


}

// update data pegawai
public function update(Request $request)
{
// update data pegawai
DB::table('pegawai')->where('pegawai_id',$request->id)->update([
'pegawai_nama' => $request->nama,
'pegawai_jabatan' => $request->jabatan,
'pegawai_umur' => $request->umur,
'pegawai_alamat' => $request->alamat
]);
// alihkan halaman ke halaman pegawai
return redirect('/pegawai');
}

// method untuk hapus data pegawai
public function hapus($id)
{
// menghapus data pegawai berdasarkan id yang dipilih
DB::table('pegawai')->where('pegawai_id',$id)->delete();
 
// alihkan halaman ke halaman pegawai
return redirect('/pegawai');
}

}
