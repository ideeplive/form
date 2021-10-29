<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

// Route::get('/', function () { return view('registration'); });
// Route::post('/', function () { return view('registration'); });


// Route::get('/', [RegistrationController::class, 'signup']);
// Route::post('/', [RegistrationController::class, 'signup']);


Route::get('/', [RegistrationController::class, 'showform']);
Route::post('/', [RegistrationController::class, 'signup']);

Route::view('olddata', 'olddata')->name('old');





