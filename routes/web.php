<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-1', function () {
    $filesystems = config('filesystems');

    if ($filesystems['disks']['public']['driver'] == 's3') {
        logger('test1', [
            'filesystems' => $filesystems,
            'laravel_cloud' => laravel_cloud(),
        ]);
    } else {
        logger()->error('missing disk', [
            'filesystems' => $filesystems,
            'laravel_cloud' => laravel_cloud(),
        ]);
    }

});
