<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Provine;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('provinces')->get();
        return response()->json($cities);
    }
}
