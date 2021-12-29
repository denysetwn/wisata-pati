<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function village(District $district)
    {
        return $district->village;
    }
}
