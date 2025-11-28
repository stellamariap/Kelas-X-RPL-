<?php

use App\Http\Controllers\FrontController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[FrontController::class,'index']); 
Route::get('show/{id}',[FrontController::class,'show']); 

Route::get('register',[FrontController::class,'register']); 
Route::get('login',[FrontController::class,'login']); 
Route::get('logout',[FrontController::class,'logout']); 

Route::post('postregister', [FrontController::class, 'store']);
Route::post('postlogin', [FrontController::class, 'postLogin']);

Route::get('beli/{id}', [CartController::class, 'beli']);
Route::get('hapus/{id}', [CartController::class, 'hapus']);
Route::get('tambah/{id}', [CartController::class, 'tambah']);
Route::get('kurang/{id}', [CartController::class, 'kurang']);

Route::get('cart', [CartController::class, 'cart']);
Route::get('batal', [CartController::class, 'batal']);
Route::get('checkout', [CartController::class, 'checkout']);

Route::get('admin', [AuthController::class, 'index']); 
Route::get('admin/postlogin', [AuthController::class, 'postLogin']); 
Route::get('admin/logout', [AuthController::class, 'logout']); 

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekLogin:admin']], function () {
        Route::resource('user', UserController::class);
    });
    Route::group(['middleware' => ['CekLogin:kasir']], function () {
        Route::resource('order', OrderController::class);
    });
    Route::group(['middleware' => ['CekLogin:manager']], function () {
        Route::resource('kategori', KategoriController::class); 
        Route::resource('menu', MenuController::class); 
        Route::resource('order', OrderController::class); 
        Route::resource('orderdetail', OrderDetailController::class); 
        Route::resource('pelanggan', PelangganController::class); 
        Route::get('select', [MenuController::class, 'select']); 
        Route::post('postmenu/{id}', [MenuController::class, 'update']);
    });
})



