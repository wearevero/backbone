<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

 
Route::get('books', [BookController::class, 'index']);
