<?php

namespace App\Http\Controllers\WebControllers;

class indexController extends Controller{
    
    // function showBeranda(){
    //     return view('indexClient');
    // }

    function showKategori(){
        return view('category');
    }

//     function showChart(Produk $produk)
//   {
//     $data['produk'] = $produk;
//     return view('indexClient.chart', $data);
//   }

    // function showdetail_products(){
     //   return view('detail_products');
   // }

}