<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table='pemesanan';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('tgl_pemesanan','nama_pembeli','alamat','no_hp','nama_produk','harga','dibayar','belum_dibayar','metode_pembayaran','status_pembayaran','ekspedisi','tgl_pengiriman','ongkos_kirim','ongkir','harga_dikurangi','status_pengiriman');

    public function pembeli() {
        return $this->belongsTo(Pembeli::class);
    }

    public function produk() {
        return $this->belongsTo(Produk::class);
    }
}
