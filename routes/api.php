<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class);
Route::apiResource('posts.comments', CommentsController::class);
