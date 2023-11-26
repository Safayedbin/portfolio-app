<?php

use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MyProjectPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'PageShow']);
Route::get('/contacts', [ContactPageController::class, 'PageShow']);
Route::get('/projects', [MyProjectPageController::class, 'PageShow']);
