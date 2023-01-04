<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Books', [App\Http\Controllers\BookController::class])->name('Books.index');
Route::get('/Writers', [App\Http\Controllers\WriterController::class])->name('Writers.index');
Route::get('/Publishers', [App\Http\Controllers\PublisherController::class])->name('Publishers.index');
Route::get('/genders', [App\Http\Controllers\GenderController::class])->name('genders.index');

Route::resource('companies', CompanyController::class);
Route::resource('genders', GenderController::class);
Route::resource('Writers', WriterController::class);
Route::resource('Publishers', PublisherController::class);
Route::resource('Books', BookController::class);

Route::get('/h', function () { return view('home1');})->name('home1');
Route::get('about', function () { return view('about');})->name('about');
Route::get('download_now', function () { return view('download_now');})->name('download_now');


