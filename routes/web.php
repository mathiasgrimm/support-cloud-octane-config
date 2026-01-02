<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-1', function () {
    $diskConfig = config('filesystems.disks.public');

    if ($diskConfig['driver'] === 'local') {
        logger()->error('disk config lost');
        return 'disk config lost';
    }
});
