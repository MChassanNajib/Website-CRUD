<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Muatan;

class Bongkaran extends Model
{
    use HasFactory;

    // protected $fillable = ['muatan_id','kode_bongkaran','nama_sopir','birthday','alamat'];
    protected $guarded = ['id'];

    public function muatan(){
        return $this->belongsTo(Muatan::class);
    }
}
