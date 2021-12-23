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
    Route::resource('Perjanjian', App\Http\Controllers\PerjanjianController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/user/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('user.pengumuman');

    Route::get('/user/pra-rka/', [App\Http\Controllers\PraRkaController::class, 'index'])->name('user.pra-rka');
    Route::get('/user/pra-rka/export', [App\Http\Controllers\PraRkaController::class, 'exportAll'])->name('user.pra-rka.export');

    Route::get('/user/pra-rka/barang-jasa/{id}', [App\Http\Controllers\PraRkaController::class, 'showBarangJasa'])->name('user.pra-rka.barang-jasa');
    Route::get('/user/pra-rka/barang-jasa/add/{id}', [App\Http\Controllers\PraRkaController::class, 'createBarangJasa'])->name('user.pra-rka.barang-jasa.add');
    Route::get('/user/pra-rka/barang-jasa/export/{id}', [App\Http\Controllers\PraRkaController::class, 'exportBarangJasa'])->name('user.pra-rka.barang-jasa.export');

    Route::get('/user/pra-rka/belanja-modal/{id}', [App\Http\Controllers\PraRkaController::class, 'showBelanjaModal'])->name('user.pra-rka.belanja-modal');
    Route::get('/user/pra-rka/belanja-modal/add/{id}', [App\Http\Controllers\PraRkaController::class, 'createBelanjaModal'])->name('user.pra-rka.belanja-modal.add');
    Route::get('/user/pra-rka/belanja-modal/export/{id}', [App\Http\Controllers\PraRkaController::class, 'exportBelanjaModal'])->name('user.pra-rka.belanja-modal.export');

    Route::get('/user/rka', [App\Http\Controllers\RkaController::class, 'index'])->name('user.rka');
    Route::get('/user/rka/export', [App\Http\Controllers\RkaController::class, 'exportAll'])->name('user.rka.export');

    Route::get('/user/rka/pengembangan-komptensi-lulusan/{id}', [App\Http\Controllers\RkaController::class, 'showPKLulusan'])->name('user.rka.pklulusan');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/add/{id}', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.add');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/export/{id}', [App\Http\Controllers\RkaController::class, 'createPKLulusan'])->name('user.rka.pklulusan.export');
    Route::get('/user/rka/pengembangan-komptensi-lulusan/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPKLulusan'])->name('user.rka.pklulusan.kuitansi');

    // pengembangan-standar-isi psi PSI
    Route::get('/user/rka/pengembangan-standar-isi/{id}', [App\Http\Controllers\RkaController::class, 'showPSI'])->name('user.rka.psi');
    Route::get('/user/rka/pengembangan-standar-isi/add/{id}', [App\Http\Controllers\RkaController::class, 'createPSI'])->name('user.rka.psi.add');
    Route::get('/user/rka/pengembangan-standar-isi/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPSI'])->name('user.rka.psi.export');
    Route::get('/user/rka/pengembangan-standar-isi/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPSI'])->name('user.rka.psi.kuitansi');
    // pengembangan-standar-kelulusan psk
    Route::get('/user/rka/pengembangan-standar-kelulusan/{id}', [App\Http\Controllers\RkaController::class, 'showPSK'])->name('user.rka.psk');
    Route::get('/user/rka/pengembangan-standar-kelulusan/add/{id}', [App\Http\Controllers\RkaController::class, 'createPSK'])->name('user.rka.psk.add');
    Route::get('/user/rka/pengembangan-standar-kelulusan/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPSK'])->name('user.rka.psk.export');
    Route::get('/user/rka/pengembangan-standar-kelulusan/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPSK'])->name('user.rka.psk.kuitansi');
    // pengembangan-kependidikan pk
    Route::get('/user/rka/pengembangan-kependidikan/{id}', [App\Http\Controllers\RkaController::class, 'showPK'])->name('user.rka.pk');
    Route::get('/user/rka/pengembangan-kependidikan/add/{id}', [App\Http\Controllers\RkaController::class, 'createPK'])->name('user.rka.pk.add');
    Route::get('/user/rka/pengembangan-kependidikan/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPK'])->name('user.rka.pk.export');
    Route::get('/user/rka/pengembangan-kependidikan/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPK'])->name('user.rka.pk.kuitansi');
    // pengembangan-sekolah ps
    Route::get('/user/rka/pengembangan-sekolah/{id}', [App\Http\Controllers\RkaController::class, 'showPS'])->name('user.rka.ps');
    Route::get('/user/rka/pengembangan-sekolah/add/{id}', [App\Http\Controllers\RkaController::class, 'createPS'])->name('user.rka.ps.add');
    Route::get('/user/rka/pengembangan-sekolah/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPS'])->name('user.rka.ps.export');
    Route::get('/user/rka/pengembangan-sekolah/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPS'])->name('user.rka.ps.kuitansi');
    // pengembangan-standar-pengelolaan pp
    Route::get('/user/rka/pengembangan-pengelolaan/{id}', [App\Http\Controllers\RkaController::class, 'showPP'])->name('user.rka.pp');
    Route::get('/user/rka/pengembangan-pengelolaan/add/{id}', [App\Http\Controllers\RkaController::class, 'createPP'])->name('user.rka.pp.add');
    Route::get('/user/rka/pengembangan-pengelolaan/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPP'])->name('user.rka.pp.export');
    Route::get('/user/rka/pengembangan-pengelolaan/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPP'])->name('user.rka.pp.kuitansi');
    // pengembangan standar-pembiayaan psp
    Route::get('/user/rka/pengembangan-standar-pembiayaan/{id}', [App\Http\Controllers\RkaController::class, 'showPSP'])->name('user.rka.psp');
    Route::get('/user/rka/pengembangan-standar-pembiayaan/add/{id}', [App\Http\Controllers\RkaController::class, 'createPSP'])->name('user.rka.psp.add');
    Route::get('/user/rka/pengembangan-standar-pembiayaan/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPSP'])->name('user.rka.psp.export');
    Route::get('/user/rka/pengembangan-standar-pembiayaan/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPSP'])->name('user.rka.psp.kuitansi');
    // pengembangan-implementasi pi
    Route::get('/user/rka/pengembangan-implementasi/{id}', [App\Http\Controllers\RkaController::class, 'showPI'])->name('user.rka.pi');
    Route::get('/user/rka/pengembangan-implementasi/add/{id}', [App\Http\Controllers\RkaController::class, 'createPI'])->name('user.rka.pi.add');
    Route::get('/user/rka/pengembangan-implementasi/export/{id}', [App\Http\Controllers\RkaController::class, 'exportPI'])->name('user.rka.pi.export');
    Route::get('/user/rka/pengembangan-implementasi/kuitansi/{id}', [App\Http\Controllers\RkaController::class, 'kuitansiPI'])->name('user.rka.pi.kuitansi');

    Route::get('/user/rka/nota/{id}', [App\Http\Controllers\RkaController::class, 'createNota'])->name('user.rka.nota.add');
    Route::get('/user/rka/nota/download/{file}', [App\Http\Controllers\NotaController::class, 'download'])->name('user.rka.nota.download');

    Route::get('/user/bku/{id}', [App\Http\Controllers\BkuController::class, 'index'])->name('user.bku');


    Route::get('/user/spj/{id}', [App\Http\Controllers\SpjController::class, 'index'])->name('user.spj');
    Route::get('/user/spj/download/{file}', [App\Http\Controllers\SpjController::class, 'download'])->name('user.spj.download');

    Route::get('/user/surat-perjanjian/{id}', [App\Http\Controllers\PerjanjianController::class, 'index'])->name('user.perjanjian');
    Route::get('/user/surat-perjanjian/download/{file}', [App\Http\Controllers\PerjanjianController::class, 'download'])->name('user.perjanjian.download');

    Route::get('/user/bantuan/{id}', [App\Http\Controllers\BantuanController::class, 'index'])->name('user.bantuan');
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

    //admin-sekolah
    Route::get('/admin/sekolah', [App\Http\Controllers\SekolahController::class, 'index'])->name('admin.sekolah');
});
