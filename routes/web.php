<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Str;

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

    return Inertia::render('Services');
});
Route::get('/thanks_for_booking', function () {
    $posts = Post::where('is_published', '=', true)->latest()->limit(3)->get();
    return Inertia::render('BookingLander', [
        'posts' => $posts
    ]);
});

Route::get('/resume', function () {
    return Inertia::render('Resume/Resume');
})->name('resume');
Route::get('/cover', function () {
    return Inertia::render('Resume/Cover');
})->name('cover');

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


Route::prefix('static')->group(function () {
    Route::get('/blog', function () {
        // Matches The "/static/blog" URL
        $posts = Post::select(['id', 'title', 'slug', 'paragraph', 'updated_at'])->where('is_published', '=', true)->get();
        return view('components.blog.index', ['posts' => $posts]);
    });
    Route::get('/blog/{slug}', function ($slug) {
        // Matches The "/static/blog/{slug}" URL
        $post = Post::where('slug', $slug)->first();
        $body = Str::of($post->body)->markdown();
        $post->increment('views');
        return view('components.blog.show', ['post' => $post, 'body' => $body]);
    });
});
