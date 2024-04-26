<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSpaceRequest;
use App\Http\Requests\UpdateSpaceRequest;
use App\Models\Space;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spaces = Space::all();

        return view('spaces.index', compact('spaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spaces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpaceRequest $request)
    {
        Space::create($request->validated());

        return redirect()->route('spaces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Space $space)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Space $space)
    {
        return view('spaces.edit', compact('spaces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpaceRequest $request, Space $space)
    {
        $space->update($request->validated());

        return redirect()->route('spaces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Space $space)
    {
        $space->delete();

        return redirect()->route('spaces.index');
    }
}
