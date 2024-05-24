<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Seto'], ['title' => 'About']);
});

Route::get('/posts/{post:slug}', function (Post $post) {


    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
