<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\KategoriCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

     private function _validation(Request $request){
        $request->validate([
        'kode_customer' => 'required|max:5|min:5',
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'kategori_id' => 'required',
        ],
        [
        'kode_customer.required' => 'Tidak Boleh Kosong',
        'nama.required' => 'Tidak Boleh Kosong',
        'alamat.required' => 'Tidak Boleh Kosong',
        'telepon.required' => 'Tidak Boleh Kosong',
        'kategori_id.required' => 'Harus Dipilih',
        'kode_customer.max' => 'Maximal 5 Digit',
        'kode_customer.min' => 'Minimal 5 Digit',
        ]);
    }

    public function show (){
        // dd($customer);
        $customer = Customer::get();
        // $kategori_customer = KategoriCustomer::get();

        return view('admin.master.customer.index' , ['customer'=> $customer]);
    }

    public function add(){
    return view('admin.master.customer.tambah');
    }

    public function save(Request $request){
    //  dd($request->all());
    $this->_validation($request);
     $customer = new Customer;

     $customer->kode_customer = $request->kode_customer;
     $customer->nama = $request->nama;
     $customer->alamat = $request->alamat;
     $customer->telepon = $request->telepon;
     $customer->kategori_id = $request->kategori_id;

     $customer->save();
    return redirect('master-customer')->with('save', 'Data Customer Berhasil Di Tambahkan...');
    }

    public function edit($id){
    $customer = Customer::find($id);
    return vieW('admin.master.customer.edit', ['customer' =>$customer]);
    }


    public function update(Request $request, $id){
    $this->_validation($request);
        
      Customer::where('id', $id)->update([
          'kode_customer' => $request->kode_customer,
          'nama' => $request->nama,
          'alamat' => $request->alamat,
          'telepon' => $request->telepon,
          'kategori_id' => $request->kategori_id
      ]);
    }

     public function delete($id){
        DB::table('customer')->where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Data Customer Berhasi Dihapus!');
    }

}
