<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {

        return view('admin.location.index', [
            'locations' => Location::query()->get(),
        ]);
    }
}
