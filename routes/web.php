<?php

use App\Models\Image;
use App\Models\Reus;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $reuzen = Reus::all();
    foreach ($reuzen as $reus){
        $reus->grid = $reus->gridImage($reus->grid_image_id);
        $reus->gridImage($reus->grid_image_id);
        $reus->banner = $reus->bannerImage($reus->banner_image_id);
        $reus->bannerImage($reus->banner_image_id);
    }
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'reuzen' => $reuzen,

    ]);
});

Route::get('/reuzen/{slug}', function ($slug) {
    $reus = Reus::where('slug', '==', $slug)->get();
    dd($reus->naam);
})->name('reus');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
