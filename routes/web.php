<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GalleryController;
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

Route::get('/gallery', function () {
    return view('gallery'); // This assumes you have a `gallery.blade.php` file in the `resources/views` directory
})->name('gallery'); // Named route for easy reference
Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ContactController;

// Route to display the contact form (GET)
Route::get('/contactUs', [ContactController::class, 'index'])->name('contactUs');

// Route to handle form submissions (POST)
Route::post('/contactUs', [ContactController::class, 'store'])->name('contactUs.store');

Route::get('/aboutUs', [AboutController::class, 'index'])->name('aboutUs');

use App\Http\Controllers\PostController;

Route::get('/liked-posts', [PostsController::class, 'likedPosts'])->name('liked-posts')->middleware('auth');

Route::get('/liked-posts', [PostsController::class, 'likedPosts'])->name('liked-posts')->middleware('auth');
