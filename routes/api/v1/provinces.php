<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinceController;

Route::name('provinces.')
	->group(function () {
		Route::get('/provinces', [ProvinceController::class, 'index'])->name('index');
	});