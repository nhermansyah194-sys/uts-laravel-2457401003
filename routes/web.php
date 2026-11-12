<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::get('/', function () {
    return redirect()->route('mobils.index');
});

Route::resource('mobils', MobilController::class);