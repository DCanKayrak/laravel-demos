<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
    });

Route::get('posts/{post:slug}', function (Post $post) {

    /*$path = __DIR__."/../resources/posts/{$slug}.html";

    $post = cache() -> remember("posts.{$slug}",5,function () use ($path) {
        return file_get_contents($path);
    });*/

    return view('post', [
        'post' => $post
    ]);
});

Route::get("/category/{category:slug}",function (Category $category){
    return view('posts',[
        'posts' => $category -> posts
    ]);
});

Route::get('/author/{user:username}',function (User $user) {

    return view('posts',[
        'posts' => $user -> posts
    ]);
});
