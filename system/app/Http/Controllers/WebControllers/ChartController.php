<?php

namespace App\Http\Controllers\WebControllers;
use App\Models\Produk;


class ChartController extends Controller{
    function index(){
        $data ['list_produk'] = Produk::all();
        return view('chart.index', $data);
    }

     function store(){
        $admin_produk = new produk;
        $admin_produk->nama = request('nama');
        $admin_produk->harga = request('harga');
        $admin_produk->berat = request('berat');
        $admin_produk->deskripsi = request('deskripsi');
        $admin_produk->stok = request('stok');
        $admin_produk->save();
        return redirect('chart');
    }

    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('chart.show', $data);
    }
}
