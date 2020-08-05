<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriCustomer extends Model
{
    protected $table = "kategori_customer";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori'
    ];

    public function customer(){
        return $this->hasMany(Customer::class);
    }
    public function barang(){
        return $this->hasMany(Barang::class);
    }
    public function penjualan(){
        return $this->hasMany(PenjualanTunai::class);
    }

}
