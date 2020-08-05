<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\KategoriCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
            'kode_barang' => 'required|max:5|min:5',
            'nama' => 'required',
            'harga' => 'required',
            'satuan_id' => 'required',
            'kategori_id' => 'required',
        ],
        [
        'kode_barang.required' => 'Tidak Boleh Kosong',
        'nama.required' => 'Tidak Boleh Kosong',
        'harga.required' => 'Tidak Boleh Kosong',
        'satuan_id.required' => 'Tidak Boleh Kosong',
        'harga.required' => 'Tidak Boleh Kosong',
        'kategori_id.required' => 'Tidak Boleh Kosong',
        'kode_barang.max' => 'Maximal 5 Digit',
        'kode_barang.min' => 'Minimal 5 Digit',
        ]);
    }


     public function show (){
        $barang = Barang::get();
         $satuan = Satuan::get();
         $kategori_customer = KategoriCustomer::get();

        return view('admin.master.barang.index' , ['barang'=> $barang], ['satuan'=> $satuan]);
    }

    public function save(Request $request){
    $this->_validation($request);
     $barang = new Barang;

     $barang->kode_barang = $request->kode_barang;
     $barang->nama = $request->nama;
     $barang->satuan_id = $request->satuan_id;
     $barang->harga = $request->harga;
     $barang->kategori_id = $request->kategori_id;

     $barang->save();
    return redirect('master-barang')->with('save', 'Data Barang Berhasil Di Tambahkan...');
    }

    public function edit($id){
    $barang = Barang::find($id);
    return vieW('admin.master.barang.edit', ['barang' =>$barang]);
    }
    
     public function update(Request $request, $id){
    $this->_validation($request);
        
      Barang::where('id', $id)->update([
          'kode_barang' => $request->kode_barang,
          'nama' => $request->nama,
          'satuan_id' => $request->satuan_id,
          'harga' => $request->harga,
          'kategori_id' => $request->kategori_id
      ]);
    }

    public function delete($id){
        DB::table('barang')->where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Data Barang Berhasi Dihapus!');
    }
}
