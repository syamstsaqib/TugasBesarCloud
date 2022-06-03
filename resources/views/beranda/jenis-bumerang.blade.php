@extends('layout/beranda-layout')
@section('content')<!--sebagai isi dari jenis bumerang dengan menghubungkan halaman dari beranda layout-->
<div class="collection_text">Jenis Bumerang</div>
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <!-- <h1 class="new_text"><strong> Jenis Bumerang</strong></h1> -->
    	    <p class="consectetur_text" style="text-align: justify;">
			Bumerang di bagi 2 jenis yaitu, Indoor dan Outdoor. Maksud dari indoor adalah bumerang biasa digunakan di dalam ruangan namun bisa juga di luar ruangan. 
			Dan terkait jaraknya biasanya hanya sampai 10 meter. Dan bumerang outdoor adalah bumerang yang digunakan di tempat terbuka dan luas. Bumerang jenis outdoor tidak bisa digunakan di dalam rumah.
			Dan jaraknya bisa sampai 90 meter tergantung macamnya. Untuk Melihat bentuknya bisa klik gambar dibawah ini.</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6">
    	    			<div class="about-img">
                            <a href="{{url('/macam-bumerang/outdoor')}}">
    	    				<div class="shoes-img"><img src="{{asset('storage/bumerang/outdoor/outdoor-fastcatch-bluelightning.png')}}"></div>
    	    				<h2 class="text-center"><strong>Outdoor</strong></h2>
                            </a>
    	    			</div>
    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
                        <a href="{{url('/macam-bumerang/indoor')}}">
    	    				<div class="shoes-img2"><img src="{{asset('storage/bumerang/indoor/wicked-indoor.png')}}" style="height: 149px;"></div>
    	    				<h2 class="text-center"><strong>Indoor</strong></h2>
                        </a>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
@endsection