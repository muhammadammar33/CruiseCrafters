<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', 'about.about');

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/pricing', function () {
    return view('pricing.pricing');
});

Route::get('/cars', function () {
    return view('cars.cars');
});

Route::get('/carDetail', function () {
    return view('carDetail.carDetail');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/blogDetail', function () {
    return view('blogDetail.blogDetail');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('/view_users', [AdminController::class, 'showUsers']);
Route::get('/userlisting/{term}', [AdminController::class, 'searchUser']);
