<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = 'satuan';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'satuan'
    ];

    public function Barang(){
        return $this->hasMany(KategoriCustomer::class);
    }
}
