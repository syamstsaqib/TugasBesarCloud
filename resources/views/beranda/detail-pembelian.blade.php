@extends('layout/beranda-layout')
@section('content')
<div class="collection_text">Detail Pesanan</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-1 mt-5">
        <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <h3>{{$request->nama_pemesan}}</h3>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah barang</label>
            <h3>{{$request->jumlah_pemesan}}</h3>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon/WhatsApp</label>
            <h3>{{$request->telepon_pemesan}}</h3>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email anda</label>
            <h3>{{$request->email_pemesan}}</h3>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat lengkap anda</label>
            <h3>{{$request->alamat_pemesan}}</h3>
        </div>
        
        </div>
        <div class="col-md-4">
        <div class="best_shoes mt-5" style="border: 3px solid black;">
            <div class="shoes_icon">
                <img src="{{asset('storage/bumerang/'. $barang->jenis_barang. '/'. $barang->gambar_barang)}}">
            </div>
            
                <div class="col-sm-12">
                    <h3>{{$barang->nama_barang}}({{$barang->jenis_barang}})</h3>
                    <div>Harga: Rp<span style="color: #ff4e5b;">{{$barang->harga_barang*$request->jumlah_pemesan}}</span></div>
                </div>
                
    	</div>
        <div>
            <h3>Anda akan segera dihubungi oleh admin kami. Terima kasih</h3>
        </div>
        </div>
    </div>
</div>
@endsection