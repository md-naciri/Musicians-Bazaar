<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\Navigation;
use App\Http\Controllers\SubcategoryController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::get('/admin', function () {
    return view('admin-dash.admin.index');
});
Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/category', CategoryController::class);
Route::resource('/subcategory', SubcategoryController::class);
});

Route::get('/',[Navigation::class, 'navigation']);

Route::get('/ad/create',[InstrumentController::class, 'create']);
Route::post('/ad/store',[InstrumentController::class, 'store'])->middleware('auth')->name('ad.store');