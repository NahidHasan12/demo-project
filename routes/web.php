<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;

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
   return view('frontend.pages.home');
});

Auth::routes([
   'register' => false,
   'passwords.confirm' => false,
   'passwords.email' => false,
   'passwords.reset' => false,
   'passwords.request' => false,
   'passwords.update' => false,
]);

//================== Authintication Route =====================//
Route::get('/signup', [AuthController::class, 'SignUp']);
Route::post('/signup/store', [AuthController::class, 'SignUpStore'])->name('signup.store');
Route::get('/signin', [AuthController::class, 'SignIn'])->name('singin');
Route::get('/forgot-pass', [AuthController::class, 'forgotPass']);





