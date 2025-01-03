<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table='produk';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama_produk','harga','deskripsi','img', 'id_category');

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
     public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class,'id_pesanan');
    }
}
