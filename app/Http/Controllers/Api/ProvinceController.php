<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $provinces = Province::all();

        return response()->json($provinces);
    }
}
