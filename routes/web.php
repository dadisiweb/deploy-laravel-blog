<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);       // Show all posts
Route::get('/create', [PostController::class, 'create']); // Form to create
Route::post('/store', [PostController::class, 'store']);  // Save new post
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);       // Show edit form
Route::put('/posts/{post}', [PostController::class, 'update']);          // Save edits
Route::delete('/posts/{post}', [PostController::class, 'destroy']);      // Delete post
Route::get('/posts/{post}', [PostController::class, 'show']); //show a post 
