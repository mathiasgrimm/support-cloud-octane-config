<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-1', function () {
    logger('test1', [
        'filesystems' => config('filesystems'),
        'laravel_cloud' => laravel_cloud(),
    ]);
});
