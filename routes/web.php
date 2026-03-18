<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::resource('characters', CharacterController::class);

Route::get('/', function () {
    return view('welcome');
});
