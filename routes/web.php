<?php

use App\Http\Controllers\BankIndex;
use App\Http\Controllers\CreditcardController;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// index
Route::get('/', function () {
    return view('welcome');
});
// production
Route::get('/migrate', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed');
    echo "si migro";
});
// dashboard card
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [CreditcardController::class,'index'])->name('dashboard');
// index to card selected
Route::get('banco/{card}', [BankIndex::class,'bank'])->name('banco.inicio');
Route::get('banco/{card}/transaccion', [BankIndex::class,'transaccion'])->name('banco.transaccion');
// error 404
Route::fallback(function(){
    return view('error.404');
});



// jetstream routes
require_once __DIR__ .'/jetstream.php';