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

// Route::get('/cars', function () {
//     return view('cars.cars');
// });

// Route::get('/carDetail', function () {
//     return view('carDetail.carDetail');
// });

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/blogDetail', function () {
    return view('blogDetail.blogDetail');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

// Route::get('/mybookings', function () {
//     return view('mybookings.bookings');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified');
Route::get('/category', [AdminController::class, 'category']);
Route::get('/car', [AdminController::class, 'car']);
Route::get('/allcars', [HomeController::class, 'allcars']);
Route::get('/cars{name}', [HomeController::class, 'cars'])->name('cars');




Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::post('/add_car', [AdminController::class, 'add_car'])->name('add_car');
Route::post('/update_car{id}', [AdminController::class, 'update_car'])->name('update_car');
Route::post('/updatebooking{id}', [HomeController::class, 'updatebooking'])->name('updatebooking');




Route::get('/carDetail{id}', [HomeController::class, 'carDetail'])->name('carDetail');
Route::get('/book{id}', [HomeController::class, 'book'])->name('book');
Route::post('/book_now{id}', [HomeController::class, 'book_now'])->name('book_now');
Route::get('/deleteCar/{id}', [AdminController::class, 'deleteCar'])->name('deleteCar');
Route::get('/deleteBooking/{id}', [HomeController::class, 'deleteBooking'])->name('deleteBooking');
Route::get('/completePayment/{id}', [AdminController::class, 'completePayment'])->name('completePayment');
Route::get('/updateCarPage/{id}', [AdminController::class, 'updateCarPage'])->name('updateCarPage');
Route::get('/updateBookingPage/{id}', [HomeController::class, 'updateBookingPage'])->name('updateBookingPage');
Route::get('/stripe/{id}', [HomeController::class, 'stripe']);
Route::post('stripe/{id}', [HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/print_pdf/{id}', [HomeController::class, 'print_pdf']);


Route::get('/show_bookings', [AdminController::class, 'showbookings']);
Route::get('/view_bookings', [HomeController::class, 'showbookings']);
Route::get('/view_users', [AdminController::class, 'showUsers']);
Route::get('/view_categories', [AdminController::class, 'showCategories']);
Route::get('/view_cars', [AdminController::class, 'showCars']);





Route::get('/userlisting/{term}', [AdminController::class, 'searchUser']);
Route::get('/categorylisting/{term}', [AdminController::class, 'searchCategory']);





Route::get('/carlistingcat/{term}', [AdminController::class, 'searchByCategory']);
Route::get('/carlistingmake/{term}', [AdminController::class, 'searchByMake']);
Route::get('/carlistingmodel/{term}', [AdminController::class, 'searchByModel']);
Route::get('/carlistingtrans/{term}', [AdminController::class, 'searchByTransmission']);
Route::get('/carlistingyearup/{term}', [AdminController::class, 'searchByYearup']);
Route::get('/carlistingyeardown/{term}', [AdminController::class, 'searchByYeardown']);
Route::get('/carlistingrentalpriceup/{term}', [AdminController::class, 'searchByRentalPriceup']);
Route::get('/carlistingrentalpricedown/{term}', [AdminController::class, 'searchByRentalPricedown']);



Route::get('/bookinglistinguser/{term}', [AdminController::class, 'searchByUser']);
Route::get('/bookinglistingmake/{term}', [AdminController::class, 'searchBookingByMake']);
Route::get('/bookinglistingmodel/{term}', [AdminController::class, 'searchBookingByModel']);