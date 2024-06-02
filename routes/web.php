<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Surats\SuketAktif;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Login::class);
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/suket-aktif', SuketAktif::class)->name('suketaktif');
});
