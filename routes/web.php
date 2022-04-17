<?php

use App\Models\Image;
use App\Models\Reus;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
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
})->name('home');

Route::get('/reuzen/{slug}', function ($slug) {
    $reuzen = Reus::all();
    foreach ($reuzen as $reus){
        $reus->grid = $reus->gridImage($reus->grid_image_id);
        $reus->gridImage($reus->grid_image_id);
        $reus->banner = $reus->bannerImage($reus->banner_image_id);
        $reus->bannerImage($reus->banner_image_id);
        $reus->images = $reus->images($reus->id);
        $reus->images($reus->id);
    }
    $reus = Reus::where('slug', $slug)->firstOrFail();
    $reus->grid = $reus->gridImage($reus->grid_image_id);
    $reus->gridImage($reus->grid_image_id);
    $reus->banner = $reus->bannerImage($reus->banner_image_id);
    $reus->bannerImage($reus->banner_image_id);
    $reus->images = $reus->images($reus->id);
    $reus->images($reus->id);


    return Inertia::render('Reus', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'reuzen' => $reuzen,
        'reus' => $reus,

    ]);
})->name('reus');

Route::get('/reuzen', function(){
    return redirect(route('reus','da-tong'));
})->name('reuzeninleuven');

Route::get('/reuzenbier', function(){
    dd('reuzenbier');
})->name('reuzenbier');

Route::post('/contactform', function(Request $request){
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $to = 'carl.desmedt@icloud.com';
    $subject = "RL-webform: {$validated['subject']}" ;
    $message = $validated['message'];

    $from = 'web@reuzeleuven.be';
    $headers   = array(
        'From' => $from,
        'Reply-To' => $from,
        'X-Mailer' => 'PHP/'.phpversion()
    );


    mail($to, $subject, $message, $headers);
    return redirect(route('home'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
