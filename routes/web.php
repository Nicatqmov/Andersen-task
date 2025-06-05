<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return redirect()->route('form');
});

Route::get('form',[FormController::class,'index'])->name('form');
Route::post('form',[FormController::class,'store'])->name('form.store');
Route::get('form/edit/{id}',[FormController::class,'edit'])->name('form.edit');
Route::put('form/{id}',[FormController::class,'update'])->name('form.update');
Route::delete('form/{id}',[FormController::class,'destroy'])->name('form.destroy');