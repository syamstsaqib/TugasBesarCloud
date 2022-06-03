<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }
    public function beranda()
    {
        $data=Pemesanan::where('status', 'belum selesai')->get();
        return view('admin/dashboard', compact('data')); // ambil dari folder view
    }
    public function barang()
    {
        $data=Barang::all();
        return view('admin/data-barang', compact('data'));
    }
    public function riwayat()
    {
        $data=Pemesanan::all();
        return view('admin/riwayat', compact('data'));
    }
    public function selesai($id)
    {
        Pemesanan::where('id', $id)->update(['status'=>'selesai']);
        return redirect()->back();
    }
    public function hapus ($id)
    {
        Barang::where('id', $id)->delete();
        return redirect()->back();
    }
    public function tambah (Request $request) // untuk semua method post di isi request $request
    {
        Barang::create([
            "nama_barang"=>$request->nama_barang,
            "jenis_barang"=>$request->jenis_barang,
            "harga_barang"=>$request->harga_barang,
            "gambar_barang"=> $request->file('gambar_barang')->getClientOriginalName(),
        ]);
        $request->file('gambar_barang')->storeAs('public/bumerang/'. $request->jenis_barang, $request->file('gambar_barang')->getClientOriginalName());
        return redirect()->back();
    }
    public function ubah (Request $request)
    {
        Barang::where('id', $request->id)->update([
            "nama_barang"=>$request->nama_barang,
            "jenis_barang"=>$request->jenis_barang,
            "harga_barang"=>$request->harga_barang,
            "gambar_barang"=> $request->file('gambar_barang')->getClientOriginalName(),
        ]);
        $request->file('gambar_barang')->storeAs('public/bumerang/'. $request->jenis_barang, $request->file('gambar_barang')->getClientOriginalName());
        return redirect()->back();
    }
    public function loginpost (Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/admin-beranda');
        }
        else{
            return redirect()->back();
        }
    }
    public function logout ()
    {
        Auth::logout();
        return redirect('/login');
    }
}
