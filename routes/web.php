<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'root'])->name('root');

/* ----------------------------以下路由可用 Auth::routes(); 代替------------------------------- */
//用户身份验证相关路由
Route::get('login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [Auth\LoginController::class, 'login']);
Route::post('logout', [Auth\LoginController::class, 'logout'])->name('logout');

//用户注册路由
Route::get('register', [Auth\RegisterController::class, 'showRegistrationForm'])->name("register");
Route::post('register', [Auth\RegisterController::class, 'register']);

//密码重置相关路由
Route::get('password/reset', [Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/confirm', [Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [Auth\ConfirmPasswordController::class, 'confirm']);
//Email认证相关路由
/* Route::get('email/verify', [Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}', [Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::get('email/resend', [Auth\VerificationController::class, 'resend'])->name('verification.resend'); */
/* ---------------------------------------------------------- */
