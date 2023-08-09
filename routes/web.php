<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DabootControllers;
use App\Http\Controllers\Custumer\CustumerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;

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
// router người dùng
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['prefix' => ''],function(){
    Route::get('/',[CustumerController::class,'index'])->name('home');
    Route::get('/shop',[CustumerController::class,'Shop'])->name('shop');
    Route::get('/shop/{id}',[CustumerController::class,'Shopcate'])->name('shopcate');
    Route::get('/about',[CustumerController::class,'About'])->name('about');
    Route::get('/contact',[CustumerController::class,'Contact'])->name('contact');
    Route::get('/services',[CustumerController::class,'Services'])->name('services');
    Route::get('/chitiet/{id}',[CustumerController::class,'chitiet'])->name('chitiet');
//giỏ hàng
    Route::post('/add_cart',[CartController::class,'addcart'])->name('addcart');
    Route::get('/show_cart',[CartController::class,'showcart'])->name('cart');
    Route::get('/show_cart/{key}',[CartController::class,'delete_cart'])->name('delete');
    Route::post('/update',[CartController::class,'update'])->name('update');
    Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
    Route::post('/checkout',[CartController::class,'post_checkout']);

    Route::get('/donhang',[CartController::class,'order'])->name('order');
    Route::get('/detail/{id}',[CartController::class,'orderdetail'])->name('orderdetail');

    Route::get('/delete_donhang/{id}',[ProductController::class,'delete_order'])->name('delete_order');







    

// });



// router login kh
Route::get('/register',[RegisterController::class,'register'])->name('dangky');
Route::post('/register',[RegisterController::class,'post_register']);
Route::get('/login',[RegisterController::class,'login'])->name('login_kh');
Route::post('/login',[RegisterController::class,'post_login']);


Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
   
    //danh mục
    Route::get('/',[CategoryController::class,'index'])->name('Category');
    Route::post('/', [CategoryController::class,'create']);
    Route::get('/edit_category/{id}', [CategoryController::class,'edit'])->name('edit_category');
    Route::post('/edit_category/{id}', [CategoryController::class,'update']);
    Route::get('/delete_category/{id}', [CategoryController::class,'delete'])->name('delete_category');

    //sản phẩm
    Route::get('product',[ProductController::class,'index'])->name('product') ;
    Route::get('add_product',[ProductController::class,'add'])->name('add_product');
    Route::post('add_product',[ProductController::class,'post']);
    Route::get('edit_product/{id}',[ProductController::class,'edit'])->name('edit_product');
    Route::post('edit_product/{id}',[ProductController::class,'update']);
    Route::get('product/{id}',[ProductController::class,'delete'])->name('delete_product');
 
});
Route::get('/login_admin',[DabootControllers::class,'login'])->name('login');
Route::post('/login_admin',[DabootControllers::class,'post_login'])->name('post-login');
Route::get('/logout',[DabootControllers::class,'log_out'])->name('log_out');
