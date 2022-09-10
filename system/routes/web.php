<?php
use App\Http\Controllers\AdminControllers\HomeController;
use App\Http\Controllers\AdminControllers\ProdukController;
use App\Http\Controllers\AdminControllers\UserController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\WebControllers\indexController;
use App\Http\Controllers\WebControllers\ProductsController;
use App\Http\Controllers\WebControllers\IndexClientController;
use App\Http\Controllers\WebControllers\ChartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tampilan depan
Route::get('/', function () {
    return view('welcome');
});

route::get('register', function(){
    return view('register');
});

//Route::get('index', [indexController::class, 'showBeranda']);
Route::get('category', [indexController::class, 'showKategori']);
// Route::get('chart/{produk}', [IndexClientController::class, 'showChart']);
//Route::get('detail_products', [indexController::class, 'showdetail_products']);
// Route::get('chart', [indexController::class, 'showChart']);

//products
Route::get('products', [ProductsController::class, 'index']);
Route::get('products/create', [ProductsController::class, 'create']);
Route::post('products', [ProductsController::class, 'store']);
Route::get('products/{produk}', [ProductsController::class, 'show']);
Route::get('products/{produk}/edit', [ProductsController::class, 'edit']);
Route::put('products/{produk}', [ProductsController::class, 'update']);
Route::delete('products/{produk}', [ProductsController::class, 'destroy']);
Route::post('products/filter', [ProductsController::class, 'filter']);
// Route::get('chart/{produk}', [ProductsController::class, 'chart']);
// Route::get('chart', [ProductsController::class, 'chart']);

//indexClient
Route::get('indexClient', [IndexClientController::class, 'index']);
Route::get('indexClient/create', [IndexClientController::class, 'create']);
Route::post('indexClient', [IndexClientController::class, 'store']);
Route::get('indexClient/{produk}', [IndexClientController::class, 'show']);
Route::get('indexClient/{produk}/edit', [IndexClientController::class, 'edit']);
Route::put('indexClient/{produk}', [IndexClientController::class, 'update']);
Route::delete('indexClient/{produk}', [IndexClientController::class, 'destroy']);
Route::post('indexClient/filter', [IndexClientController::class, 'filter']);


//chart
Route::get('chart', [ChartController::class, 'index']);
// Route::get('chart/create', [ChartController::class, 'create']);
Route::post('chart', [ChartController::class, 'store']);
Route::get('chart/{produk}', [ChartController::class, 'show']);
// Route::get('chart/{produk}/edit', [ChartController::class, 'edit']);
// Route::put('chart/{produk}', [IndexClientController::class, 'update']);
// Route::delete('chart/{produk}', [IndexClientController::class, 'destroy']);
// Route::post('chart/filter', [IndexClientController::class, 'filter']);


//admin
Route::get('AdminBeranda', [HomeController::class, 'showBeranda']);
Route::get('AdminKategori', [HomeController::class, 'showKategori']);
Route::get('AdminPromo', [HomeController::class, 'showPromo']);
Route::get('AdminPelanggan', [HomeController::class, 'showPelanggan']);
Route::get('AdminSuplier', [HomeController::class, 'showSuplier']);

//Admin Produk
Route::get('AdminProduk', [ProdukController::class, 'index']);
Route::get('AdminProduk/create', [ProdukController::class, 'create']);
Route::post('AdminProduk', [ProdukController::class, 'store']);
Route::get('AdminProduk/{produk}', [ProdukController::class, 'show']);
Route::get('AdminProduk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('AdminProduk/{produk}', [ProdukController::class, 'update']);
Route::delete('AdminProduk/{produk}', [ProdukController::class, 'destroy']);
Route::post('AdminProduk/filter', [ProdukController::class, 'filter']);
Route::get('produk-collection' , [ProdukController::class, 'Collection']);

//Admin User
Route::get('Adminuser', [UserController::class, 'index']);
Route::get('Adminuser/create', [UserController::class, 'create']);
Route::post('Adminuser', [UserController::class, 'store']);
Route::get('Adminuser/{user}', [UserController::class, 'show']);
Route::get('Adminuser/{user}/edit', [UserController::class, 'edit']);
Route::put('Adminuser/{user}', [UserController::class, 'update']);
Route::delete('Adminuser/{user}', [UserController::class, 'destroy']);

//Login
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

//register

//test Ajax
Route::get('checkout1', [HomeController::class, 'testAjax']);