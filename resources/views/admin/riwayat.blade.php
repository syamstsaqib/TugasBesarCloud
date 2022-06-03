@extends('layout/admin-layout')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Riwayat Pemesanan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Barang</th>
                        <th>Jenis</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $dt)
                      <tr>
                        <td>{{$dt->nama_pemesan}}</td>
                        <td>{{$dt->jumlah_pemesan}}</td>
                        <td>{{$dt->telepon_pemesan}}</td>
                        <td>{{$dt->email_pemesan}}</td>
                        <td>{{$dt->alamat_pemesan}}</td>
                        <td>{{$dt->nama_barang}}</td>
                        <td>{{$dt->jenis_barang}}</td>
                        <td>{{$dt->status}}</td>
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
@endsection