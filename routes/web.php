<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('homepage');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/order/whatsapp/{packageId}/{duration}', [FrontendController::class, 'orderViaWhatsapp'])
    ->name('order.whatsapp');