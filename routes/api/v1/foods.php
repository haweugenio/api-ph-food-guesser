<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FoodController;

Route::name('foods.')
	->group(function () {
		Route::get('/foods', [FoodController::class, 'index'])->name('index');
		Route::get('/foods/random', [FoodController::class, 'random'])->name('random');
	});