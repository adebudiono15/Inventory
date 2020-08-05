<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PenjualanTunai;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanTunaiController extends Controller
{

    public function show(){
        $penjualan_tunai = PenjualanTunai::all();
        // return $penjualan_tunai;
        return view('admin.transaksi.tunai.penjualan', compact('penjualan_tunai'));
    }

    public function save(Request $request){
     $penjualan_tunai = new PenjualanTunai;

     $penjualan_tunai->kode_customer_id = $request->kode_customer_id;
     $penjualan_tunai->tgl_transaksi = $request->tgl_transaksi;
     $penjualan_tunai->kode_barang_id = $request->kode_barang_id;
     $penjualan_tunai->jumlah = $request->jumlah;
     $penjualan_tunai->total_harga = $request->total_harga;

     $penjualan_tunai->save();
     return redirect('transaksi-penjualan-tunai')->with('save', 'Data Penjualan Tunai Berhasil Di Tambahkan...');
    }
}
