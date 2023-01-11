<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bongkaran;

class Muatan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_muatan','nama_sopir','barang','telepon','alamat'];


    public function bongkaran(){
        return $this->hasMany(Bongkaran::class);
    }
}
