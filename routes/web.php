<?php

// use PDF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

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

Route::get('/inputdata', function () {
    return view('inputdata');
});


Route::get('/', [App\Http\Controllers\CvController::class, 'showCVs'])->name('admin.home');

Route::get('/laravel/pdf', [CvController::class, 'createPDF']);

