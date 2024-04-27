<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LocationController extends Controller
{
    public function index()
    {

        return view('admin.location.index', [
            'locations' => Location::query()->get(),
        ]);
    }

    public function create() {
        return view('admin.location.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $location = new Location;

        $location->name = $request->name;
        $location->description = $request->description;
        $location->weight = $request->weight;
        $location->status = $request->status;
        $location->operational_time = $request->operational_time;

        $location->save();

        return redirect('/admin/location');
    }

    public function edit(int $id)
    {
        return view('admin.location.edit', [
            'location' => Location::query()->find($id)
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        // Validate the request...

        $location = Location::find($request->id);

        $location->name = $request->name;
        $location->description = $request->description;
        $location->weight = $request->weight;
        $location->status = $request->status;
        $location->operational_time = $request->operational_time;

        $location->save();

        return redirect('/admin/location');
    }

    public function destroy(int $id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect('/admin/location');
    }
}
