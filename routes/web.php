<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\Navigation;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserProfileController;

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

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/{id}/view', [DashboardController::class, 'userArticles'])->name('user.articles');
    Route::resource('/category', CategoryController::class);
    Route::resource('/subcategory', SubcategoryController::class);
    Route::get('/users', [AdminController::class, 'showUsers'])->name('users.index');
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.destroy');
    Route::get('/data', [AdminController::class, 'getUsers'])->name('admin.users.data');
    Route::delete('/ads/{id}', [AdminController::class, 'destroy'])->name('admin.ad.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/myads/create', [InstrumentController::class, 'create'])->name('ad.create');
    Route::post('/myads/store', [InstrumentController::class, 'store'])->name('ad.store');
    Route::get('/myads', [InstrumentController::class, 'index'])->name('getMyAds');
    Route::get('/myads/edit/{id}', [InstrumentController::class, 'edit'])->name('ad.edit');
    Route::put('/myads/update/{id}', [InstrumentController::class, 'update'])->name('ad.update');
    Route::delete('/myads/delete/{id}', [InstrumentController::class, 'destroy'])->name('ad.destroy');

    //stripe
    Route::get('/stripe/{id}', [StripeController::class, 'stripe'])->name('stripe');
    Route::post('/stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
});

Route::get('/', [Navigation::class, 'navigation'])->name('home-page');


// Route::delete('admin/ads/{id}', [AdminController::class, 'destroy'])->middleware('auth')->name('admin.ad.destroy');
// Route::get('admin/users', [AdminController::class, 'showUsers'])->middleware('auth')->name('users.index');
// Route::delete('admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.destroy');
// Route::get('admin/users/data', [AdminController::class, 'getUsers'])->name('admin.users.data');




Route::get('/profile', [UserProfileController::class, 'index'])->middleware('auth')->name('user.profile');
Route::put('/profile', [UserProfileController::class, 'updateUser'])->middleware('auth')->name('update.user');
Route::delete('/profile', [UserProfileController::class, 'deleteUser'])->middleware('auth')->name('delete.user');

Route::get('/article/{catSlag}', [FilterController::class, 'articleByCat'])->name('cat');
Route::get('/article/{catSlag}/{subcatSlug}', [FilterController::class, 'articleBySubcat'])->name('subcat');
Route::get('/articl/{id}/{slug}', [InstrumentController::class, 'articleDisplay'])->name('article.display');
Route::get('search', [SearchController::class, 'searchArticle']);
Route::get('/articles/latest', [FilterController::class, 'latestArticles'])->name('article.latest');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/auth/facebook', [SocialiteController::class, 'facebookRedirect'])->name('facebook.redirect');
Route::get('/auth/facebook/back', [SocialiteController::class, 'facebookBack'])->name('facebook.back');

Route::post('/contact', [ContactController::class, 'contactUs'])->name('contact.us');
