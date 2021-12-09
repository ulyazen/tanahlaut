<?php

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return Redirect::to('/home');
    });

    Route::resource('PraRka', App\Http\Controllers\PraRkaController::class);
    Route::resource('Rka', App\Http\Controllers\RkaController::class);
    Route::resource('Nota', App\Http\Controllers\NotaController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/user/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('user.pengumuman');

    Route::get('/user/pra-rka', [App\Http\Controllers\PraRkaController::class, 'index'])->name('user.pra-rka');
    Route::get('/user/pra-rka/barang-jasa', [App\Http\Controllers\PraRkaController::class, 'showBarangJasa'])->name('user.pra-rka.barang-jasa');
    Route::get('/user/pra-rka/barang-jasa/add', [App\Http\Controllers\PraRkaController::class, 'createBarangJasa'])->name('user.pra-rka.barang-jasa.add');
    Route::get('/user/pra-rka/barang-jasa/edit/{id}', [App\Http\Controllers\PraRkaController::class, 'editBarangJasa'])->name('user.pra-rka.barang-jasa.edit');
    Route::get('/user/pra-rka/belanja-modal', [App\Http\Controllers\PraRkaController::class, 'showBelanjaModal'])->name('user.pra-rka.belanja-modal');
    Route::get('/user/pra-rka/belanja-modal/add', [App\Http\Controllers\PraRkaController::class, 'createBelanjaModal'])->name('user.pra-rka.belanja-modal.add');
    Route::get('/user/pra-rka/belanja-modal/edit/{id}', [App\Http\Controllers\PraRkaController::class, 'editBelanjaModal'])->name('user.pra-rka.belanja-modal.edit');

    Route::get('/user/rka', [App\Http\Controllers\RkaController::class, 'index'])->name('user.rka');
    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/nota/{id}', [App\Http\Controllers\RkaController::class, 'createNota'])->name('user.rka.nota.add');

    Route::get('/user/bku', [App\Http\Controllers\BkuController::class, 'index'])->name('user.bku');

    Route::get('/user/spj', [App\Http\Controllers\SpjController::class, 'index'])->name('user.spj');

    Route::get('/user/bantuan', [App\Http\Controllers\BantuanController::class, 'index'])->name('user.bantuan');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/pengumuman', [App\Http\Controllers\PengumumanController::class, 'admin'])->name('admin.pengumuman');
    Route::get('/admin/pra-rka', [App\Http\Controllers\PraRkaController::class, 'admin'])->name('admin.pra-rka');
    Route::get('/admin/rka', [App\Http\Controllers\RkaController::class, 'admin'])->name('admin.rka');
    Route::get('/admin/bku', [App\Http\Controllers\BkuController::class, 'admin'])->name('admin.bku');
    Route::get('/admin/spj', [App\Http\Controllers\SpjController::class, 'admin'])->name('admin.spj');
});
