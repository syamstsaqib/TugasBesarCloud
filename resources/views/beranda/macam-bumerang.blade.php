@extends('layout/beranda-layout')
@section('content')
<div class="collection_text">Collection</div>
<div class="layout_padding gallery_section" style="margin-top: 50px;">
    	<div class="container">
    		<div class="row">
				@foreach($data as $dt)
    			<div class="col-sm-4">
    				<div class="best_shoes" style="max-height: 371px;">
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
			<div class="row">
				<div class="col-md-12">
				@if($jenis=='outdoor')
				<a class="btn btn-dark" href="/macam-bumerang/indoor">Indoor</a>
				@else
				<a class="btn btn-dark" href="/macam-bumerang/outdoor">Outdoor</a>
				@endif
				</div>
			</div>
    	</div>
    </div>
@endsection