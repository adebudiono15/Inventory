<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
     protected $table = 'barang';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_barang', 'nama', 'satuan_id', 'kategori_id'
    ];
        public function satuan(){
        return $this->belongsTo(Satuan::class);
    }
        public function kategori(){
        return $this->belongsTo(KategoriCustomer::class);
    }
        public function penjualan(){
        return $this->hasMany(PenjualanTunai::class);
    }
}
