<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;

    // Kolom yang akan diisi
    protected $fillable = [
        'NamaProduk',
        'Barcode',
        'Harga',
        'Stok',
    ];
    // Relasi ke model DetailPenjualan (one to many)
    public function detailpenjualans()
    {
        return $this->hasMany(detailPenjualan::class, 'ProdukID', 'id');
    }
}
