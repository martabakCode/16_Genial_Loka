<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\Location;

class MobileController extends Controller
{
    public function detail($id)
    {
        return view('mobile.location', [
            'location' => Location::with('animals.animal_images')->find($id)
        ]);

    }

    public function routes()
    {
        return view('mobile.routes');
    }

    public function animal_detail($id, $animalId)
    {
        $animal = Animal::where('id', $animalId)->with('animal_images')->first();
        return view('mobile.detail', compact('animal'));
    }
}
