<?php

use App\Livewire\Dashboard;
use App\Livewire\Layanan\Home;
use App\Livewire\Login;
use App\Livewire\Mahasiswas\MahasiswaCreate;
use App\Livewire\Mahasiswas\MahasiswaList;
use App\Livewire\Prodis\ProdiList;
use App\Livewire\Surats\SuketAktif;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Login::class)->middleware('guest')->name('login');
// Route::get('/logout', Login::class)->name('logout');

Route::middleware(['auth:mahasiswa'])->prefix('mhs')->name('mhs.')->group(function(){
    Route::get('/home', Home::class)->name('home');

});

Route::middleware(['auth:web'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/suket-aktif', SuketAktif::class)->name('suketaktif');
    Route::get('/mahasiswa', MahasiswaList::class)->name('mahasiswalist');
    Route::get('/mahasiswa/create', MahasiswaCreate::class)->name('mahasiswacreate');
    Route::get('/prodi', ProdiList::class)->name('prodilist');
});
