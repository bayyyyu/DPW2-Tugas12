<?php

namespace App\Http\Controllers\WebControllers;
use App\Models\Produk;
use App\Models\Provinsi;

class ProductsController extends Controller{
    function index(){
        $data ['list_produk'] = Produk::all();
         $data['list_produk'] = Produk::paginate(12);
        return view('products.index', $data);
    }

     function store(){
        $admin_produk = new produk;
        $admin_produk->nama = request('nama');
        $admin_produk->harga = request('harga');
        $admin_produk->berat = request('berat');
        $admin_produk->deskripsi = request('deskripsi');
        $admin_produk->stok = request('stok');
        $admin_produk->save();
        return redirect('products');
    }

    function show(Produk $produk){
        $data['produk'] = $produk;
        $data['list_provinsi'] = Provinsi::all();
        return view('products.show', $data);
    }

    function filter()
  {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('products.index', $data);
  }
  function sortBy(){
    
    $list_produk = Produk::all();
    $list_produk = $list_produk;
    return view('products', $data);

  }


   
}
