<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Livewire\Pages\Admin\AddUser;
//regist
use App\Http\Livewire\Pages\Admin\RegistBand;
use App\Http\Livewire\Pages\Admin\RegistBasket;
use App\Http\Livewire\Pages\Admin\RegistFutsal;
use App\Http\Livewire\Pages\Admin\RegistEsport;
use App\Http\Livewire\Pages\Admin\RegistOlimpiade;
use App\Http\Livewire\Pages\Admin\RegistStorytelling;
use App\Http\Livewire\Pages\Admin\UpdateUser;
use App\Http\Livewire\Pages\Admin\UpdateStatus;
use App\Http\Livewire\Pages\Admin\AdminUpdateStatus;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

                // REGISTRASI


                // Route::get('registrasi', AddUser::class)->middleware(['auth'])->name('add-user');
                // Route::get('registrasi/storytelling', AddUser::class)->middleware(['auth'])->name('storytelling');
                // Route::get('registrasi/olimpiade', AddUser::class)->middleware(['auth'])->name('olimpiade');

Route::get('/registrasi/band', [RegistBand::class, 'create'])
                ->middleware('auth')
                ->name('band');

Route::post('/registrasi/band', [RegistBand::class, 'store'])
                ->middleware('auth');

Route::get('/registrasi/basket', [RegistBasket::class, 'create'])
                ->middleware('auth')
                ->name('basket');

Route::post('/registrasi/basket', [RegistBasket::class, 'store'])
                ->middleware('auth');

Route::get('/registrasi/futsal', [RegistFutsal::class, 'create'])
                ->middleware('auth')
                ->name('futsal');

Route::post('/registrasi/futsal', [RegistFutsal::class, 'store'])
                ->middleware('auth');

Route::get('/registrasi/esport', [RegistEsport::class, 'create'])
                ->middleware('auth')
                ->name('esport');

Route::post('/registrasi/esport', [RegistEsport::class, 'store'])
                ->middleware('auth');

Route::get('/registrasi/storytelling', [RegistStorytelling::class, 'create'])
                ->middleware('auth')
                ->name('storytelling');

Route::post('/registrasi/storytelling', [RegistStorytelling::class, 'store'])
                ->middleware('auth');

Route::get('/registrasi/olimpiade', [RegistOlimpiade::class, 'create'])
                ->middleware('auth')
                ->name('olimpiade');

Route::post('/registrasi/olimpiade', [RegistOlimpiade::class, 'store'])
                ->middleware('auth');

Route::get('/buktipembayaran', [UpdateUser::class, 'create'])
                ->middleware('auth')
                ->name('bayar');

Route::post('/buktipembayaran', [UpdateUser::class, 'update'])
                ->middleware('auth');


Route::get('/status', [UpdateStatus::class, 'create'])
                ->middleware('auth')
                ->name('status');

Route::post('/status', [UpdateStatus::class, 'update'])
                ->middleware('auth');

// Route::get('/Admin/UpdatestatusBayar', [AdminUpdateStatus::class, 'create'])
//                 ->middleware('auth')
//                 ->name('admin-status');

// Route::post('/Admin/UpdatestatusBayar', [AdminUpdateStatus::class, 'update'])
//                 ->middleware('auth');
// Route::get('/admin/view-bukti', [AdminUpdateStatus::class, 'create'])
//                 ->middleware('auth')
//                 ->name('admin-status');

// Route::post('/admin/view-bukti', [AdminUpdateStatus::class, 'update'])
//                 ->middleware('auth');


// Route::get('/admin/view-bukti', AdminUpdateStatus::class,'update')->middleware(['auth'])->name('View_Bukti');
// Route::post('/admin/view-bukti', AdminUpdateStatus::class,'update')->middleware(['auth'])->name('admin-status');






