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
})->name('booking')->middleware('auth');



//airport
Route::get('/airports', [AirportController::class,'index'])->name('airports')->middleware('auth');
Route::post('/airports', [AirportController::class,'store'])->name('add_airports')->middleware('auth');
Route::delete('/delete/{id}', [AirportController::class,'delete'])->name('airports.delete')->middleware('auth');
Route::put('/airports/{id}', [AirportController::class, 'update'])->name('airports.update')->middleware('auth');
Route::get('/get-services/{id}', [AirportController::class, 'getServices'])->middleware('auth');
Route::get('/', [AirportController::class, 'airportlist'])->name('welcom');



//services
Route::get('/service', [ServiceController::class,'index'])->name('showservices')->middleware('auth');
Route::post('/services', [ServiceController::class,'store'])->name('add_services')->middleware('auth');
Route::delete('/remove/{id}',[ServiceController::class, 'destroy'])->name('services.delete')->middleware('auth');
Route::put('/update/{id}', [ServiceController::class,'update'])->name('service.update')->middleware('auth');

//booking

Route::get('/booking',[BookingController::class,'index'])->name('booking')->middleware('auth');
Route::post('/booking/reserve', [BookingController::class, 'create'])->name('booking/create')->middleware('auth');
Route::get('/reservation',[BookingController::class,'display'])->name('bookingTable');
Route::get('/overview',[BookingController::class,'overview'])->name('overview')->middleware('auth');

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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


// Route::post('mollie', [MollieController::class, 'mollie'])->name('mollie');
//  Route::get('/success', [MollieController::class, 'success'])->name('success');
// Route::get('cancel', [MollieController::class, 'cancel'])->name('cancel');