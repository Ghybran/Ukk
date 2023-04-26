<?php

use App\Http\Controllers\Ad_FasilitasController;
use App\Http\Controllers\CekController;
use App\Http\Controllers\Fasilitas_standartController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\RoomsController;
use App\Models\Fasilitas_standart;
use App\Models\Inventory;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cek', function () {
    return view('cek');
})->middleware(['auth', 'verified'])->name('cek');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/ok', [UserController::class, 'show'])->name('ok');
                // laporan \\
    Route::get('/laporan',[ReportController::class,'show'])->name('laporan');
    Route::post('/create',[ReportController::class,'create'])->name('create');
    Route::post('/update',[ReportController::class,'update'])->name('update');
    Route::post('/delete',[ReportController::class,'delete'])->name('delete');
                 // inventory \\
    Route::get('inventory',[InventoryController::class,'show'])->name('inventory');
    Route::post('insert',[InventoryController::class,'insert'])->name('insert');
    Route::post('update',[InventoryController::class,'update'])->name('update');
    Route::post('delete',[InventoryController::class,'delete'])->name('delete');

    Route::get('jadwal',[JurnalController::class,'show'])->name('jadwal');
    Route::post('insert_jurnal',[JurnalController::class,'insert'])->name('insert_jurnal');

    Route::get('informan',[RoomsController::class,'show'])->name('informan');

    Route::get('order',[OrdersController::class,'show_p'])->name('order');
    Route::post('insert_kamar',[OrdersController::class,'insert_kamar'])->name('insert_kamar');

    Route::get('fasilitas',[FasilitasController::class,'fasilitas'])->name('fasilitas');

    Route::get('fasilitas_ad',[Ad_FasilitasController::class,'fasilitas_ad'])->name('fasilitas_ad');//ADMIN
    Route::post('insert_fasilitas_ad',[Ad_FasilitasController::class,'insert_fasilitas_ad'])->name('insert_fasilitas_ad');//ADMIN


    Route::get('cek',[CekController::class,'cek'])->name('cek');

    });






require __DIR__.'/auth.php';
