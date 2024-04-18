<?php 
use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('pages/about');
})->name('about');

Route::get('home', function () {
    return view('dashboard/home');
})->name('home');

Route::get('booking', function () {
    return view('pages/booking');
})->name('booking');


//airport
Route::get('/airports', [AirportController::class,'index'])->name('airports');
Route::post('/airports', [AirportController::class,'store'])->name('add_airports');
Route::delete('/delete/{id}', [AirportController::class,'delete'])->name('airports.delete');
Route::put('/airports/{id}', [AirportController::class, 'update'])->name('airports.update');
Route::get('/get-services/{id}', [AirportController::class, 'getServices']);
Route::get('/', [AirportController::class, 'airportlist'])->name('welcome');


//services
Route::get('/service', [ServiceController::class,'index'])->name('showservices');
Route::post('/services', [ServiceController::class,'store'])->name('add_services');
Route::delete('/remove/{id}',[ServiceController::class, 'destroy'])->name('services.delete');
Route::put('/update/{id}', [ServiceController::class,'update'])->name('service.update');

//booking

Route::get('/booking',[BookingController::class,'index'])->name('booking');

Route::post('/booking/reserve', [BookingController::class, 'create'])->name('booking/create');

Route::get('/reservation',[BookingController::class,'display'])->name('bookingTable');


//cart
Route::get('add/to/cart/',[CartController::class,'index'])->name('cart');
Route::get('remove/booking/{id}', [CartController::class, 'remove'])->name('remove_cart');



//payment

Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('cancel', [StripeController::class, 'cancel'])->name('cancel');

//auth

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/register', [AuthController::class, 'index'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('newregister');
Route::post('/login', [AuthController::class, 'login'])->name('newlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


// Route::post('mollie', [MollieController::class, 'mollie'])->name('mollie');
//  Route::get('/success', [MollieController::class, 'success'])->name('success');
// Route::get('cancel', [MollieController::class, 'cancel'])->name('cancel');