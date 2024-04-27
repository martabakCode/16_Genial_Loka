<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return view('admin.animal.index', [
            'animals' => Animal::query()->get()
        ]);
    }
}
