<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('purchase', PurchaseController::class, [
    'only' => ['index']
]);
Route::resource('referral', ReferralController::class, [
    'only' => ['index']
]);
Route::resource('reward', RewardController::class, [
    'only' => ['index']
]);
Route::resource('tier', TierController::class, [
    'only' => ['index']
]);
Route::resource('user', UserController::class, [
    'only' => ['index']
]);
