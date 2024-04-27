<?php

use App\Http\Controllers\AnimalImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group( function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/location', [App\Http\Controllers\LocationController::class, 'index']);

    Route::controller(AnimalImageController::class)->group(function () {
        Route::get('animal-images', 'index')->name('animal-images.index');
        Route::get('animal-images/create', 'create')->name('animal-images.create');
        Route::post('animal-images', 'store')->name('animal-images.store');
        Route::get('animal-images/{animalImage}/edit', 'edit')->name('animal-images.edit');
        Route::put('animal-images/{animalImage}', 'update')->name('animal-images.update');
        Route::delete('animal-images/{animalImage}', 'destroy')->name('animal-images.destroy');
    });

    Route::get('/location', [App\Http\Controllers\LocationController::class, 'index']);
    Route::get('/location/create', [App\Http\Controllers\LocationController::class, 'create']);
    Route::get('/location/update/{id}', [App\Http\Controllers\LocationController::class, 'edit']);
    Route::get('/location/destroy/{id}', [App\Http\Controllers\LocationController::class, 'destroy']);
    Route::post('/location', [App\Http\Controllers\LocationController::class, 'store']);
    Route::put('/location', [App\Http\Controllers\LocationController::class, 'update']);

    Route::controller(\App\Http\Controllers\AnimalController::class)->group(function () {
        Route::get('/animals', 'index');
        Route::get('/animals/create', 'create');
        Route::post('/animals', 'store');
        Route::get('/animals/{id}/update', 'edit');
        Route::get('/animals/{id}/destroy', 'destroy');
        Route::put('/animals', 'update');
    });
});
Route::get('/detail/{id}', [App\Http\Controllers\MobileController::class, 'detail']);
Route::get('/routes', [App\Http\Controllers\MobileController::class, 'routes']);
Route::get('/timeline/{id}', [App\Http\Controllers\TimelineController::class, 'loadLocation']);
