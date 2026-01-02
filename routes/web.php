<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-1', function () {
    $privateDisk = array_filter((array) config('filesystems.disks.private'));

    if ($privateDisk) {
        //logger("disk found");
    } else {
        logger("disk not found");
    }
});
