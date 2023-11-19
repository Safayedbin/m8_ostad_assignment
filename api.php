<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


  Route::get('/profile/{id}', [ProfileController::class, 'index']);
