<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable=["nama_pemesan", "jumlah_pemesan", "telepon_pemesan", "email_pemesan", "alamat_pemesan", "nama_barang", "jenis_barang", "gambar_barang", "status"]; //kurung siku itu menandakan tipe data array
}
