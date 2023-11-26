<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\MyProjectPageController;

Route::get('/', [HomepageController::class, 'PageShow']);
Route::get('/contacts', [ContactPageController::class, 'PageShow']);
Route::get('/projects', [MyProjectPageController::class, 'PageShow']);
