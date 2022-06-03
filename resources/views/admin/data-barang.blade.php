@extends('layout/admin-layout')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tabel Barang</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Baru</button></div>
                <div class="card">
                    <div class="card-body">
                    <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $dt)
                      <tr>
                        <td>{{$dt->nama_barang}}</td>
                        <td>{{$dt->jenis_barang}}</td>
                        <td>{{$dt->harga_barang}}</td>
                        <td class="text-center"><img height="200" width="200" src="{{asset('storage/bumerang/'. $dt->jenis_barang. '/'. $dt->gambar_barang)}}" alt=""></td>
                        <td class="text-center">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ubah-{{$dt->id}}">Ubah</button> <!-- hastag untuk mencari id dari ubah -->
                          <a class="btn btn-danger" href="/hapus/{{$dt->id}}">Hapus</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Tambah Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambah" method="POST" enctype="multipart/form-data">
          @csrf <!-- untuk setiap method POST butuh @csrf sebagai safety-->
            <div class="form-group">
                <label for="nama_barang">Nama</label>
                <input type="text" class="form-control" style="color:black" name="nama_barang" id="nama_barang" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <div style="display:flex; justify-content:center">
                <div class="form-check mx-5">
                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios1" value="indoor" checked>
                    <label class="form-check-label" for="exampleRadios1">Indoor</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios2" value="outdoor">
                    <label class="form-check-label" for="exampleRadios2">Outdoor</label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga</label>
                <input type="text" class="form-control" name="harga_barang" style="color:black" id="harga_barang" required>
            </div>
            <div class="form-group">
                <label>Gambar</label><br>
                <label for="gambar_barang" class="btn btn-success">choose your fghter</label>
                <label id="nama_file">Tidak ada Gambar</label> <!-- bagian innerText -->
                <input type="file" accept='image/*' class="form-control" name="gambar_barang" style="display:hidden" id="gambar_barang">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
    </form>
  </div>
</div>


<!-- Ubah Modal -->
@foreach($data as $dt)
<div class="modal fade" id="ubah-{{$dt->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/ubah" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="nama_barang">Nama</label>
                <input type="text" class="form-control" style="color:black" name="nama_barang" id="nama_barang" value="{{$dt->nama_barang}}" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <div style="display:flex; justify-content:center">
                <div class="form-check mx-5">
                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios1" value="indoor" @if($dt->jenis_barang=='indoor') checked @endif>
                    <label class="form-check-label" for="exampleRadios1">Indoor</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios2" value="outdoor" @if($dt->jenis_barang=='outdoor') checked @endif>
                    <label class="form-check-label" for="exampleRadios2">Outdoor</label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga</label>
                <input type="text" class="form-control" name="harga_barang" style="color:black" id="harga_barang" value="{{$dt->harga_barang}}" required>
            </div>
            <div class="form-group">
                <label>Gambar</label><br>
                <label for="gambar_barang" class="btn btn-success">choose your fghter</label>
                <label id="nama_file">Tidak ada Gambar</label> <!-- bagian innerText -->
                <input type="file" accept='image/*' class="form-control" name="gambar_barang" style="display:hidden" id="gambar_barang" required>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      <input type="hidden" name="id" value="{{$dt->id}}">
      </form>
    </div>
  </div>
</div>
@endforeach
<script>
    const nama_file=document.getElementById('nama_file'); //getElementById untuk mengambil objek dari nama_file berdasarkan id
    const gambar_barang=document.getElementById('gambar_barang');
    gambar_barang.addEventListener('change',function(){    //addEventListener berfungsi untuk mengubah value saat melakukan perubahan
       const gambar=gambar_barang.files[0].name
       nama_file.innerText=gambar  //inner.Text berfungsi untuk memberikan tulisan sesuai dengan file yang dipilih
    })
</script>
@endsection