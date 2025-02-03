<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $foods = Food::all();

        return response()->json($foods);
    }

    public function random(Request $request)
    {
        $food = Food::with('province')
            ->inRandomOrder()
            ->first();

        return response()->json($food);
    }
}
