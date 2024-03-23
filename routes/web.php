<?php 
use App\Http\Controllers\AirportController;
use App\Http\Controllers\ServiceController;
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

Route::get('/airports', [AirportController::class,'index'])->name('airports');
Route::post('/airports', [AirportController::class,'store'])->name('add_airports');
Route::delete('/delete/{id}', [AirportController::class,'delete'])->name('airports.delete');

Route::get('/service', [ServiceController::class,'index'])->name('showservices');
Route::post('/services', [ServiceController::class,'store'])->name('add_services');
Route::delete('/remove/{id}',[ServiceController::class, 'destroy'])->name('services.delete');





// Route::get('airports', function () {
//     return view('dashboard/airports');
// })->name('airports');


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