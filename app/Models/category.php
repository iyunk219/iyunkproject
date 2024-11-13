<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
        protected $table='category';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama_kategori');
}
