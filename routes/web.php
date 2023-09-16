<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts', [
        'posts' => Post::all()
    ]);
    });

Route::get('posts/{post}', function ($slug) {

    /*$path = __DIR__."/../resources/posts/{$slug}.html";

    $post = cache() -> remember("posts.{$slug}",5,function () use ($path) {
        return file_get_contents($path);
    });*/

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);
});
