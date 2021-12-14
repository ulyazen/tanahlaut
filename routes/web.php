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
    Route::resource('Bku', App\Http\Controllers\BkuController::class);
    Route::resource('Spj', App\Http\Controllers\SpjController::class);
    Route::resource('Bantuan', App\Http\Controllers\BantuanController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/user/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('user.pengumuman');

    Route::get('/user/pra-rka', [App\Http\Controllers\PraRkaController::class, 'index'])->name('user.pra-rka');
    Route::get('/user/pra-rka/export', [App\Http\Controllers\PraRkaController::class, 'exportAll'])->name('user.pra-rka.export');

    Route::get('/user/pra-rka/barang-jasa', [App\Http\Controllers\PraRkaController::class, 'showBarangJasa'])->name('user.pra-rka.barang-jasa');
    Route::get('/user/pra-rka/barang-jasa/add', [App\Http\Controllers\PraRkaController::class, 'createBarangJasa'])->name('user.pra-rka.barang-jasa.add');
    Route::get('/user/pra-rka/barang-jasa/export', [App\Http\Controllers\PraRkaController::class, 'exportBarangJasa'])->name('user.pra-rka.barang-jasa.export');

    Route::get('/user/pra-rka/belanja-modal', [App\Http\Controllers\PraRkaController::class, 'showBelanjaModal'])->name('user.pra-rka.belanja-modal');
    Route::get('/user/pra-rka/belanja-modal/add', [App\Http\Controllers\PraRkaController::class, 'createBelanjaModal'])->name('user.pra-rka.belanja-modal.add');
    Route::get('/user/pra-rka/belanja-modal/export', [App\Http\Controllers\PraRkaController::class, 'exportBelanjaModal'])->name('user.pra-rka.belanja-modal.export');

    Route::get('/user/rka', [App\Http\Controllers\RkaController::class, 'index'])->name('user.rka');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/pengembangan-komptensi-lulusan', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');

    Route::get('/user/rka/nota/{id}', [App\Http\Controllers\RkaController::class, 'createNota'])->name('user.rka.nota.add');
    Route::get('/user/rka/nota/download/{file}', [App\Http\Controllers\NotaController::class, 'download'])->name('user.rka.nota.download');

    Route::get('/user/bku', [App\Http\Controllers\BkuController::class, 'index'])->name('user.bku');


    Route::get('/user/spj', [App\Http\Controllers\SpjController::class, 'index'])->name('user.spj');
    Route::get('/user/spj/download/{file}', [App\Http\Controllers\SpjController::class, 'download'])->name('user.spj.download');

    Route::get('/user/bantuan', [App\Http\Controllers\BantuanController::class, 'index'])->name('user.bantuan');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/pra-rka', [App\Http\Controllers\PraRkaController::class, 'admin'])->name('admin.pra-rka');
    Route::put('/admin/pra-rka/approve-admin', [App\Http\Controllers\PraRkaController::class, 'approveAdmin'])->name('admin.pra-rka.approve-admin');
    Route::put('/admin/pra-rka/approve-admin-zona', [App\Http\Controllers\PraRkaController::class, 'approveAdminZona'])->name('admin.pra-rka.approve.admin-zona');
    Route::put('/admin/pra-rka/approve-super-admin', [App\Http\Controllers\PraRkaController::class, 'approveSuperAdmin'])->name('admin.pra-rka.approve-super-admin');
    Route::get('/admin/rka', [App\Http\Controllers\RkaController::class, 'admin'])->name('admin.rka');
    Route::put('/admin/pra-rka/approve-admin', [App\Http\Controllers\RkaController::class, 'approveAdmin'])->name('admin.pra-rka.approve-admin');
    Route::put('/admin/pra-rka/approve-admin-zona', [App\Http\Controllers\RkaController::class, 'approveAdminZona'])->name('admin.pra-rka.approve.admin-zona');
    Route::put('/admin/pra-rka/approve-super-admin', [App\Http\Controllers\RkaController::class, 'approveSuperAdmin'])->name('admin.pra-rka.approve-super-admin');
    Route::get('/admin/bku', [App\Http\Controllers\BkuController::class, 'admin'])->name('admin.bku');
    Route::put('/admin/pra-rka/approve-admin', [App\Http\Controllers\BkuController::class, 'approveAdmin'])->name('admin.pra-rka.approve-admin');
    Route::put('/admin/pra-rka/approve-admin-zona', [App\Http\Controllers\BkuController::class, 'approveAdminZona'])->name('admin.pra-rka.approve.admin-zona');
    Route::put('/admin/pra-rka/approve-super-admin', [App\Http\Controllers\BkuController::class, 'approveSuperAdmin'])->name('admin.pra-rka.approve-super-admin');
    Route::get('/admin/spj', [App\Http\Controllers\SpjController::class, 'admin'])->name('admin.spj');
    Route::put('/admin/pra-rka/approve-admin', [App\Http\Controllers\SpjController::class, 'approveAdmin'])->name('admin.pra-rka.approve-admin');
    Route::put('/admin/pra-rka/approve-admin-zona', [App\Http\Controllers\SpjController::class, 'approveAdminZona'])->name('admin.pra-rka.approve.admin-zona');
    Route::put('/admin/pra-rka/approve-super-admin', [App\Http\Controllers\SpjController::class, 'approveSuperAdmin'])->name('admin.pra-rka.approve-super-admin');
    Route::get('/admin/pengumuman', [App\Http\Controllers\PengumumanController::class, 'admin'])->name('admin.pengumuman');
});
