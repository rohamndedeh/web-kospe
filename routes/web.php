<?php

use App\Http\Controllers\IzinController;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'home')->name('home');
Route::livewire('/profil', 'profil')->name('profil');
Route::livewire('/simpanan-anggota', 'simpanan-anggota')->name('simpanan-anggota');
Route::livewire('/simpanan-sukarela', 'simpanan-sukarela')->name('simpanan-sukarela');
Route::livewire('/simpanan-program', 'simpanan-program')->name('simpanan-program');
Route::livewire('/simpanan-berjangka', 'simpanan-berjangka')->name('simpanan-berjangka');
Route::livewire('/haji-khusus', 'haji-khusus')->name('haji-khusus');
Route::livewire('/modal-usaha', 'modal-usaha')->name('modal-usaha');
Route::livewire('/multi-jasa', 'multi-jasa')->name('multi-jasa');
Route::livewire('/renovasi-rumah', 'renovasi-rumah')->name('renovasi-rumah');
Route::livewire('/kantor', 'kantor')->name('kantor');
Route::livewire('/mykospe', 'mykospe')->name('mykospe');
Route::livewire('/daftar-anggota', 'daftar-anggota')->name('daftar-anggota');
Route::livewire('/daily-report', 'daily-report')->name('daily-report');
Route::livewire('/daily-pengurus', 'daily-pengurus')->name('daily-pengurus');
Route::livewire('/form-cuti', 'form-cuti')->name('form-cuti');
Route::livewire('/login', 'admin.login')->name('login');
Route::livewire('/blogs/detail/{id}', 'blogs-detail')->name('blogs.detail');
Route::get('/izin-approval/{id}', [IzinController::class, 'approve']);
Route::get('/izin-pengurus/{id}', [IzinController::class, 'pengurus']);
Route::group(['middleware' => ['auth']], function () {
  Route::livewire('/dashboard', 'admin.dashboard')->name('dashboard');
  Route::livewire('/reminder', 'admin.reminder')->name('reminder');
  Route::livewire('/anggota', 'admin')->name('anggota');
});
