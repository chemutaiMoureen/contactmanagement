<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GroupController;


// Root URL should show contacts
Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');


// Resource routes
Route::resource('contacts', ContactController::class);
Route::resource('groups', GroupController::class);
