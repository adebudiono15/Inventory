<?php

use Illuminate\Support\Facades\Route;


// Route::get('/login', function () {
    //     return view('otentikasi.login');
    // });
    
    // MASTER
    // Customer
Route::group(['middleware'=> 'auth'], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('master-customer', 'CustomerController@show')->name('master-customer');
    Route::get('add-customer', 'CustomerController@add')->name('add-customer');
    Route::post('save-customer', 'CustomerController@save')->name('save-customer');
    Route::get('{id}/edit-customer', 'CustomerController@edit')->name('edit-customer');
    Route::patch('customer/update/{id}', 'CustomerController@update')->name('update-customer');
    Route::delete('customer/{id}', 'CustomerController@delete')->name('delete-customer');
    // Last customer
    
    // barang
    Route::get('master-barang', 'BarangController@show')->name('master-barang');
    Route::get('add-barang', 'BarangController@add')->name('add-barang');
    Route::post('save-barang', 'BarangController@save')->name('save-barang');
    Route::get('{id}/edit-barang', 'BarangController@edit')->name('edit-barang');
    Route::patch('barang/update/{id}', 'BarangController@update')->name('update-barang');
    Route::delete('barang/{id}', 'BarangController@delete')->name('delete-barang');
    // last barang
    
    // satuan
    Route::get('master-satuan', 'SatuanController@show')->name('master-satuan');
    Route::get('add-satuan', 'SatuanController@add')->name('add-satuan');
    Route::post('save-satuan', 'SatuanController@save')->name('save-satuan');
    Route::get('{id}/edit-satuan', 'SatuanController@edit')->name('edit-satuan');
    Route::patch('satuan/update/{id}', 'SatuanController@update')->name('update-satuan');
    Route::delete('satuan/{id}', 'SatuanController@delete')->name('delete-satuan');
    // last satuan
    
    // TRANSAKSI
    // penjualan tunai
    Route::get('transaksi-penjualan-tunai', 'PenjualanTunaiController@show')->name('transaksi-penjualan-tunai');
    Route::get('add-penjualan-tunai', 'PenjualanTunaiController@add')->name('add-penjualan-tunai');
    Route::post('save-penjualan-tunai', 'PenjualanTunaiController@save')->name('save-penjualan-tunai');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
