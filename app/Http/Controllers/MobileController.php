<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MobileController extends Controller
{
    public function detail($id){
        return view('mobile.detail', [
            'location' => Location::with('animals.animal_images')->find($id)
        ]);

    }
    public function routes(){
        return view('mobile.routes');

    }
}
