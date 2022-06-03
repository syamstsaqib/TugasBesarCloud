<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable=["nama_barang", "jenis_barang", "harga_barang", "count", "gambar_barang"];
}
