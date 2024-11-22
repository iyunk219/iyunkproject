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
    protected $fillable=array('tgl_pemesanan','user_id','produk_id','bayar_st','kelurahan','kecamatan','kabupaten','provinsi','no_telp','catatan','qty');
}
