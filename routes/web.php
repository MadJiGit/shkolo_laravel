<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ButtonController;

Route::get('/', [ButtonController::class, 'index'])->name('index');
Route::get('/button/edit/{id}', [ButtonController::class, 'edit'])->name('button.edit');
Route::post('/button/save', [ButtonController::class, 'save'])->name('button.save');
Route::delete('/button/delete/{id}', [ButtonController::class, 'delete'])->name('button.delete');

