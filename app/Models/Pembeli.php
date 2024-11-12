<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
        protected $table='pembeli';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama_pembeli','alamat','no_hp');

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
