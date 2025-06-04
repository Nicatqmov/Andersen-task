<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return redirect()->route('form');
});

Route::get('form',[FormController::class,'index'])->name('form');
Route::post('form',[FormController::class,'store'])->name('form.store');