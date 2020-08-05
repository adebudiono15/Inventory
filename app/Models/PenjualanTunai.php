<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanTunai extends Model
{
     protected $table = 'penjualan_tunai';
    protected $primaryKey = "id";
      protected $fillable = [
        'id', 'kode_customer_id', 'tgl_transaksi', 'kode_barang_id', 'jumlah', 'total_harga'
    ];

      public function kode_customer(){
        return $this->belongsTo(Customer::class);
    }
      public function kode_barang(){
        return $this->belongsTo(Barang::class);
    }
    
}
