<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
            'satuan' => 'required',
        ],
        [
        'satuan.required' => 'Tidak Boleh Kosong',
        ]);
    }


    public function show (){
        $satuan = Satuan::get();

        return view('admin.master.satuan.index' , ['satuan'=> $satuan]);
    }

    public function save(Request $request){
    $this->_validation($request);
     $satuan = new Satuan;

     $satuan->satuan = $request->satuan;

     $satuan->save();
    return redirect('master-satuan')->with('save', 'Data Satuan Berhasil Di Tambahkan...');
    }

    public function edit($id){
    $satuan = Satuan::find($id);
    return vieW('admin.master.satuan.edit', ['satuan' =>$satuan]);
    }

     public function update(Request $request, $id){
         $this->_validation($request);
        
      Satuan::where('id', $id)->update([
          'satuan' => $request->satuan
      ]);
    }

    public function delete($id){
        DB::table('satuan')->where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Data Satuan Berhasi Dihapus!');
    }
}
