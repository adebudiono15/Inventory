<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode_customer', 'nama', 'alamat', 'telepon', 'kategori_id'
    ];

    public function kategori(){
        return $this->belongsTo(KategoriCustomer::class);
    }

    public function penjualan(){
        return $this->hasMany(PenjualanCustomer::class);
    }

  
}
