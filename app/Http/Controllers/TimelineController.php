<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function loadLocation(int $id)
    {
        // Ambil lokasi berdasarkan ID, sertakan relasi animals dan animal_images
        $location = Location::with('animals.animal_images')->find($id);

        // Pastikan lokasi ditemukan
        if ($location) {
            // Format data lokasi sesuai kebutuhan
            $formattedLocation = [
                'id' => $location->id,
                'name' => $location->name,
                'description' => $location->description,
                'weight' => $location->weight,
                'status' => $location->status,
                'animals' => []
            ];

            // Loop melalui setiap hewan pada lokasi dan tambahkan ke array animals dalam $formattedLocation
            foreach ($location->animals as $animal) {
                $formattedAnimal = [
                    'id' => $animal->id,
                    'name' => $animal->name,
                    'species' => $animal->species,
                    'latin_name' => $animal->latin_name,
                    'description' => $animal->description,
                    'food' => $animal->food,
                    'reproduction' => $animal->reproduction,
                    'feeding_time' => $animal->feeding_time,
                    'date_of_birth' => $animal->date_of_birth,
                    'weight' => $animal->weight,
                    'is_feedable' => $animal->is_feedable,
                    'images' => []
                ];

                // Loop melalui setiap gambar hewan dan tambahkan ke array images dalam $formattedAnimal
                foreach ($animal->animal_images as $image) {
                    $formattedAnimal['images'][] = [
                        'id' => $image->id,
                        'file_name' => $image->file_name,
                        'url' => $image->url,
                    ];
                }

                $formattedLocation['animals'][] = $formattedAnimal;
            }
            return response()->json($formattedLocation);
        } else {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }

}
