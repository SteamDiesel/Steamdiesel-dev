<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts = Post::where('is_published', '=', true)->latest()->limit(3)->get();
    return Inertia::render('Welcome', [
        'posts' => $posts
    ]);
});
Route::get('/services', function () {
    $posts = Post::where('is_published', '=', true)->latest()->limit(3)->get();
    return Inertia::render('Services', [
        'posts' => $posts
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{slug}', [PostController::class, 'show']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
