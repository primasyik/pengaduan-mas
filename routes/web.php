<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/penduduk-inputaspirasi', function () {
    return DB::table('input_aspirasis')
            ->select('*')
            ->join('aspirasis','input_aspirasis.category_id','=','aspirasis.category_id')
            ->join('categories','aspirasis.category_id','=','categories.id')
            ->get();
});

Route::get('/', [App\Http\Controllers\AspirasiController::class, 'formAspirasi']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth');
Route::get('/aspirasi', [App\Http\Controllers\InputAspirasiController::class, 'index']);
Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->middleware('auth');
Route::get('/feedback', [App\Http\Controllers\AspirasiController::class, 'index'])->middleware('auth');

Route::get('/tanggapan', [App\Http\Controllers\AspirasiController::class, 'formTanggapan'])->middleware('auth');

Route::get('/tanggapan/{id}', [App\Http\Controllers\AspirasiController::class, 'formTanggapan'])->middleware('auth');

Route::post('/', [App\Http\Controllers\InputAspirasiController::class, 'store']);

Route::get('/admin-profil', [App\Http\Controllers\UserController::class, 'index']);

use Illuminate\Support\Facades\DB;


