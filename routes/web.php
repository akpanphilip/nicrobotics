<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/terms/', [TermsController::class, 'index'])->name('terms');
Route::get('/terms/privacy-policy', [TermsController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms/service-agreement', [TermsController::class, 'serviceAgreement'])->name('serviceAgreement');

//user dashboard
Route::get('/dashboard/logout', [UserDashboardController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/referral', [UserDashboardController::class, 'referral'])->name('referral')->middleware('auth');
Route::post('/dashboard', [UserDashboardController::class, 'update'])->name('userUpdate')->middleware('auth');
Route::get('/dashboad/update-info', [UserDashboardController::class, 'update_info'])->name('updateInfo')->middleware('auth');
Route::post('/dashboard/update-info/avatar', [UserDashboardController::class, 'updateAvatar'])->name('updateAvatar')->middleware('auth');
Route::post('/dashboard/update-info/email', [UserDashboardController::class, 'updateEmail'])->name('updateEmail')->middleware('auth');
Route::get('/dashboard/download', [UserDashboardController::class, 'download'])->name('download')->middleware('auth');
Route::get('/dashboard/change-password', [ChangePasswordController::class, 'changePassword'])->name('changePassword')->middleware('auth');
Route::post('/dashboard/change-password', [ChangePasswordController::class, 'store'])->name('changePassword')->middleware('auth');
