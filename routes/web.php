<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

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

Auth::routes();


Route::group(["middleware" => "auth:web"], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("/activity", [TelegramController::class, "activity"])->name("activity");
    Route::get("/send", [TelegramController::class, "sendMessage"])->name("send.message");
    Route::post("/store-message", [TelegramController::class, "storeMessage"])->name("store.message");
    Route::post("/store-photo", [TelegramController::class, "storePhoto"])->name("store.photo");
});
