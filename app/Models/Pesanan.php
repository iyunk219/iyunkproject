<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
     protected $table='pesanan';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('tgl_pemesanan','user_id','produk_id','bayar_st','kelurahan','kecamatan','kabupaten','provinsi','no_hp','catatan','qty','keranjang_id','total','subtotal','alamat');

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    // Hubungan dengan model Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }
}
