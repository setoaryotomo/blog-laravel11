<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Seto Aryotomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus fuga, iusto adipisci totam rerum porro temporibus ad fugiat at perferendis, dicta placeat et blanditiis ea! Temporibus maiores nobis beatae!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Seto Aryotomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus fuga, iusto adipisci totam rerum porro temporibus ad fugiat at perferendis, dicta placeat et blanditiis ea! Temporibus maiores nobis beatae!'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Seto'], ['title' => 'About']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Seto Aryotomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus fuga, iusto adipisci totam rerum porro temporibus ad fugiat at perferendis, dicta placeat et blanditiis ea! Temporibus maiores nobis beatae!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Seto Aryotomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe delectus fuga, iusto adipisci totam rerum porro temporibus ad fugiat at perferendis, dicta placeat et blanditiis ea! Temporibus maiores nobis beatae!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
