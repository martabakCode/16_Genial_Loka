<?php

namespace App\Http\Controllers;

use App\Models\AnimalImage;
use Illuminate\Http\Request;

class AnimalImageController extends Controller
{
    public function index()
    {
        $animal_images = AnimalImage::with('animal')->get();

        return view('admin.animal-image.index', compact('animal_images'));
    }

    public function create()
    {
        return view('admin.animal-image.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('animal_images'), $imageName);

        AnimalImage::create([
            'animal_id' => $request->animal_id,
            'image' => $imageName,
        ]);

        return redirect()->route('animal-images.index')
            ->with('success', 'Animal image created successfully.');
    }

    public function edit(AnimalImage $animalImage)
    {
        return view('admin.animal-image.edit', compact('animalImage'));
    }

    public function update(Request $request, AnimalImage $animalImage)
    {
        $request->validate([
            'animal_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('animal_images'), $imageName);

        $animalImage->update([
            'animal_id' => $request->animal_id,
            'image' => $imageName,
        ]);

        return redirect()->route('animal-images.index')
            ->with('success', 'Animal image updated successfully.');
    }

    public function destroy(AnimalImage $animalImage)
    {
        if (file_exists(public_path('animal-images/' . $animalImage->image))) {
            unlink(public_path('animal-images/' . $animalImage->image));
        }
        $animalImage->delete();

        return redirect()->route('animal-images.index')
            ->with('success', 'Animal image deleted successfully.');
    }
}
