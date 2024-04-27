<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return view('admin.animal.index', [
            'animals' => Animal::query()->with('location')->get()
        ]);
    }

    public function create() {
        return view('admin.animal.create', [
            'locations' => Location::query()->get()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $animal = new Animal;

        $animal->location_id = $request->location_id;
        $animal->name = $request->name;
        $animal->species = $request->species;
        $animal->latin_name = $request->latin_name;
        $animal->description = $request->description;
        $animal->food = $request->food;
        $animal->reproduction = $request->reproduction;
        $animal->feeding_time = $request->feeding_time;
        $animal->date_of_birth = $request->date_of_birth;
        $animal->weight = $request->weight;
        $animal->is_feedable = $request->is_feedable;

        $animal->save();

        return redirect('/admin/animals');
    }

    public function edit(int $id)
    {
        return view('admin.animal.edit', [
            'animal' => Animal::query()->find($id),
            'locations' => Location::query()->get()
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        // Validate the request...

        $animal = Animal::find($request->id);

        $animal->location_id = $request->location_id;
        $animal->name = $request->name;
        $animal->species = $request->species;
        $animal->latin_name = $request->latin_name;
        $animal->description = $request->description;
        $animal->food = $request->food;
        $animal->reproduction = $request->reproduction;
        $animal->feeding_time = $request->feeding_time;
        $animal->date_of_birth = $request->date_of_birth;
        $animal->weight = $request->weight;
        $animal->is_feedable = $request->is_feedable;

        $animal->save();

        return redirect('/admin/animals');
    }

    public function destroy(int $id)
    {
        $animal = Animal::find($id);
        $animal->delete();

        return redirect('/admin/animals');
    }
}
