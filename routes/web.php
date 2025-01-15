<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\Projects;

Route::get('/', [Index::class, '__invoke']);
Route::get('/projects', [Projects::class, '__invoke']);
Route::get('/stocks', function(){
    return view("stocks");
});