<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblPostController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', App\Http\Controllers\TblPostController::class);
