<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CartController;
use App\Models\BarangGalleries;

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

Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register-save', [AuthController::class, 'funRegistration'])->name('register.fun');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-save', [AuthController::class, 'funLogin'])->name('login.fun');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang');

    Route::get('/cart/tambah/{id}', [CartController::class, 'tambah_ke_cart'])->where("id", "[0-9]+");
    Route::get('/cart/tambah_lagi/{id}', [CartController::class, 'tambah_lagi'])->where("id", "[0-9]+");
    Route::get('/cart/hapus/{id}', [CartController::class, 'hapus_keranjang'])->where("id", "[0-9]+");
    Route::get('/cart/hapus', [CartController::class, 'hapus_semua']);
    Route::get('/cart/kurangi/{id}', [CartController::class, 'kurangi'])->where("id", "[0-9]+");

    Route::get('/transaksi/tambah', [CartController::class, 'tambah_transaksi']);

    Route::get('/logout', [AuthController::class, 'signOut'])->name('logout.user');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/dashboard/create', [AdminController::class, 'make'])->name('make_barang');

    Route::resource('barang', BarangController::class);
    Route::put('barang-update/{id}', [BarangController::class, 'update']);

    Route::get('/logout', [AuthController::class, 'signOut'])->name('logout.admin');
});
