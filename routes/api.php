<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Helpers\Routes\RouteHelper;

Route::group([], function (){
    RouteHelper::includeRouteFiles(__DIR__ . '/api/v1');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
