<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{
    
    function showBeranda(){
        return view('AdminBeranda');
    }

    function showProduk(){
        return view('AdminProduk');
    }

    function showKategori(){
        return view('AdminKategori');
    }

    function showPromo(){
        return view('AdminPromo');
    }

    function showPelanggan(){
        return view('AdminPelanggan');
    }

    function showSuplier(){
        return view('AdminSuplier');
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('checkout1', $data);
    }

}