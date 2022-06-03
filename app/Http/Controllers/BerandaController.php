<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function beranda()
    {
        $data=Barang::orderBy("count","desc")->take(6)->get();
        return view('beranda/beranda', compact("data"));
    }
    public function jenis()
    {
        return view('beranda/jenis-bumerang');
    }
    public function macam($jenis)
    {
        $data=Barang::where('jenis_barang', $jenis)->get();
        return view('beranda/macam-bumerang', compact("data", "jenis"));
    }
    public function toko(Request $request)
    {
        if($request->nama_barang){
            $data=DB::select("SELECT * FROM barangs WHERE nama_barang LIKE '%$request->nama_barang%' ");
        } else{
        $data = Barang::all();
        }
        return view('beranda/toko-bumerang', compact('data'));
    }
    public function pembelian($id)
    {
        $data = Barang::where('id', $id)->first();
        return view('beranda/form-pembelian', compact("data"));
    }
    public function pemesanan(Request $request)
    {
        $barang=Barang::where('id', $request->id_barang)->first();//single arrow setelah tutup kurung merupakan method
        $count=Barang::where('id', $request->id_barang)->pluck('count')->first();//fungsi pluck hanya untuk mengambil field yang kita mau
        Pemesanan::create($request->all());// single arrow yang di dahului dolar(variabel) maka itu adalah field dari database
        Barang::where('id', $request->id_barang)->update(['count'=>$count+1]);
        return view('beranda/detail-pembelian', compact("request", "barang"));
    }
}

