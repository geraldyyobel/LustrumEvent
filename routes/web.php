<?php

use App\Http\Livewire\Pages\Admin\AddUser;
use App\Http\Livewire\Pages\Admin\AdminUpdateStatus;
use App\Http\Livewire\Pages\Admin\pembayaran;
use App\Http\Livewire\Pages\Admin\ViewUser;
use App\Http\Livewire\Pages\Admin\ViewBasket;
use App\Http\Livewire\Pages\Admin\ViewBand;
use App\Http\Livewire\Pages\Admin\ViewSepakBola;
use App\Http\Livewire\Pages\Admin\ViewOlimpiade;
use App\Http\Livewire\Pages\Admin\ViewEsport;
use App\Http\Livewire\Pages\Admin\ViewStoryTelling;
use App\Http\Livewire\Pages\Admin\ViewBukti;

// Registrasi
use App\Http\Livewire\Pages\Admin\RegistBand;
use App\Http\Livewire\Pages\Dashboard;
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
    return view('welcome2');
})->name('welcome2');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/view-user', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/kelola_basket', ViewBasket::class)->middleware(['auth'])->name('kelola_basket');
Route::get('/admin/kelola_sepak-bola', ViewSepakBola::class)->middleware(['auth'])->name('kelola_sepak-bola');
Route::get('/admin/kelola_storytelling', ViewStoryTelling::class)->middleware(['auth'])->name('kelola_storytelling');
Route::get('/admin/kelola_band', ViewBand::class)->middleware(['auth'])->name('kelola_band');
Route::get('/admin/kelola_olimpiade', ViewOlimpiade::class)->middleware(['auth'])->name('kelola_olimpiade');
Route::get('/admin/kelola_esport', ViewEsport::class)->middleware(['auth'])->name('kelola_esport');
Route::get('/admin/view-bukti', ViewBukti::class)->middleware(['auth'])->name('View_Bukti');
Route::get('/admin/ubah-status-bayar', AdminUpdateStatus::class)->middleware(['auth'])->name('status-bayar');
Route::post('/admin/ubah-status-bayar{id}',[AdminUpdateStatus::class,'update'])->middleware(['auth'])->name('admin-status');
// Route::post('/Admin/UpdatestatusBayar', [AdminUpdateStatus::class, 'update'])
//                 ->middleware('auth');
Route::get('/admin/add-user', AddUser::class)->middleware(['auth'])->name('add-user');

//pembayaran
 Route::get('/pembayaran', pembayaran::class)->middleware(['auth'])->name('pembayaran');
 //Route::post('/pembayaran/ViewBuktiAdmin/{bukti}', 'Admin/ViewBukti@completedUpdate')->name('completedUpdate');
 //Route::get('/pembayaran/ViewBuktiAdmin', ViewBukti::class)->middleware(['auth'])->name('ViewBukti');
// Route::get('pembayaran', [pembayaran::class,'pembayaran'])->name('pembayaran');

Route::get('/admin/exportband',[ViewBand::class,'exportband'])->middleware(['auth'])->name('export-band');
Route::get('/admin/exportolimpiade',[ViewOlimpiade::class,'exportolimpiade'])->middleware(['auth'])->name('export-olimpiade');
Route::get('/admin/exportfutsal',[ViewSepakBola::class,'exportfutsal'])->middleware(['auth'])->name('export-futsal');
Route::get('/admin/exportbasket',[ViewBasket::class,'exportbasket'])->middleware(['auth'])->name('export-basket');
Route::get('/admin/exportstorytelling',[ViewStoryTelling::class,'exportstorytelling'])->middleware(['auth'])->name('export-storytelling');
Route::get('/admin/exportesport',[ViewEsport::class,'exportesport'])->middleware(['auth'])->name('export-esport');

//registrasi
require __DIR__ . '/auth.php';