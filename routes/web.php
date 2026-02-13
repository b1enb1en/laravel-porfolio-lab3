<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\AboutSkillsController;
use App\Http\Controllers\GoalsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PorfolioController::class, 'index']);
Route::get('/about', [AboutSkillsController::class, 'index']);
Route::get('/goals', [GoalsController::class, 'index']);
