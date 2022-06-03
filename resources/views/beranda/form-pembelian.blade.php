@extends('layout/beranda-layout')
@section('content')
<div class="collection_text">Halaman Pembelian</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-1 mt-5">
        <form action="/pemesanan" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama_pemesan" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah barang</label>
            <input type="number" class="form-control" id="jumlah" aria-describedby="emailHelp" name="jumlah_pemesan" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon/WhatsApp</label>
            <input type="text" class="form-control" id="telepon" aria-describedby="emailHelp" name="telepon_pemesan" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email anda</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email_pemesan" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat lengkap anda</label>
            <input type="textarea" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat_pemesan" required>
        </div>
        <input type="hidden" name="nama_barang" value="{{$data->nama_barang}}">
        <input type="hidden" name="jenis_barang" value="{{$data->jenis_barang}}">
        <input type="hidden" name="gambar_barang" value="{{$data->gambar_barang}}">
        <input type="hidden" name="id_barang" value="{{$data->id}}">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="submit">Submit</button>
        
        </div>
        <div class="col-md-4">
        <div class="best_shoes mt-5" style="border: 3px solid black;">
            <div class="shoes_icon">
                <img src="{{asset('storage/bumerang/'. $data->jenis_barang. '/'. $data->gambar_barang)}}">
            </div>
            
                <div class="col-sm-12">
                    <h3>{{$data->nama_barang}}({{$data->jenis_barang}})</h3>
                    <div>Harga: Rp<span style="color: #ff4e5b;">{{$data->harga_barang}}</span></div>
                
                </div>
    	</div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pastikan Kembali Pilihan Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Nama</h3>
        <p style="margin-top:-10px;" id="pnama">-</p>
        <h3>Jumlah Barang</h3>
        <p style="margin-top:-10px;" id="pjumlah">-</p>
        <h3>Nomor Telepon/WhatsApp</h3>
        <p style="margin-top:-10px;" id="ptelepon">-</p>
        <h3>Email anda</h3>
        <p style="margin-top:-10px;" id="pemail">-</p>
        <h3>Alamat Lengkap Anda</h3>
        <p style="margin-top:-10px;" id="palamat">-</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    const nama=document.getElementById('nama');
    const jumlah=document.getElementById('jumlah');
    const telepon=document.getElementById('telepon');
    const email=document.getElementById('email');
    const alamat=document.getElementById('alamat');


    const pnama=document.getElementById('pnama');
    const pjumlah=document.getElementById('pjumlah');
    const ptelepon=document.getElementById('ptelepon');
    const pemail=document.getElementById('pemail');
    const palamat=document.getElementById('palamat');
    const submit=document.getElementById('submit');

    submit.addEventListener('click', function(){
        pnama.innerText=nama.value;
        pjumlah.innerText=jumlah.value;
        ptelepon.innerText=telepon.value;
        pemail.innerText=email.value;
        palamat.innerText=alamat.value;
    })
    
</script>
@endsection