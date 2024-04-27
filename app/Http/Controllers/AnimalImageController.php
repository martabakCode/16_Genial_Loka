<?php

namespace App\Http\Controllers;

use App\Models\Animal;
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
        $animals = Animal::get();

        return view('admin.animal-image.create', compact('animals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');
        $random_name = time().'_'.rand(1000,9999);
        $imageName = $random_name . '.' . $file->extension();
        $file->move(public_path('storage/animal_images'), $imageName);

        AnimalImage::create([
            'animal_id' => $request->animal_id,
            'file_name' => $imageName,
            'url' => url('storage/animal_images/' . $imageName),
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

        if (file_exists(public_path('animal-images/' . $animalImage->image))) {
            unlink(public_path('animal-images/' . $animalImage->image));
        }

        $file = $request->file('image');
        $imageName = time() . '.' . $file->extension();
        $file->move(public_path('storage/animal_images'), $imageName);

        $animalImage->update([
            'animal_id' => $request->animal_id,
            'file_name' => $imageName,
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
