@extends('layout/beranda-layout')
@section('content')
<div class="collection_text">Selamat Datang di Toko</div>
<div class="container">
    <div class="row">
<form action="" method="GET" style="width: 100%;">
		<div class="col-md-8 offset-md-2 mt-5">
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cari" name="nama_barang" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        </div>
</form>
    </div>
</div>
<div class="layout_padding gallery_section" style="margin-top: 50px;">
    	<div class="container">
    		<div class="row">
			@foreach($data as $dt)
    			<div class="col-sm-4">
    				<div class="best_shoes" style="max-height: 366px;">
    					<div class="shoes_icon"><img src="{{asset('storage/bumerang/'. $dt->jenis_barang . '/'. $dt->gambar_barang)}}" style="width: 265px; height: 190px;"></div>
    					
                            <div class="col-sm-12" style="display:flex;align-items:center;justify-content:space-between">
                            <div class="pull-left">
								<h3>{{$dt->nama_barang}}</h3>
								<h3>({{$dt->jenis_barang}})</h3>
                            </div>
                            <div class="pull-right">
    							<div class="shoes_price text-center">Rp<span style="color: #ff4e5b;">{{$dt->harga_barang}}</span><br><a class="btn btn-primary" style="width:100%" href="{{url('/form-pembelian/'. $dt->id)}}">Beli</a> </div>
    						</div>
                            </div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </div>
@endsection