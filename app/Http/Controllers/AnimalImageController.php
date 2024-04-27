<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalImageController extends Controller
{
    public function index()
    {
        return view('admin.animal-image.index');
    }
}
