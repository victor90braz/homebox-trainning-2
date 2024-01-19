<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('posts/{post:slug}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);

});

Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts
    ]);
});
