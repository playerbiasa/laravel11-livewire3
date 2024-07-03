<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Mahasiswas\MahasiswaList;
use App\Livewire\Prodis\ProdiList;
use App\Livewire\Surats\SuketAktif;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', Login::class);
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/suket-aktif', SuketAktif::class)->name('suketaktif');
    Route::get('/mahasiswa', MahasiswaList::class)->name('mahasiswalist');
    Route::get('/prodi', ProdiList::class)->name('prodilist');
});
