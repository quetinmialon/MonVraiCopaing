<?php

use App\Controllers\HelloController;
use MVC\Route;

return [
    Route::get('/index', [HelloController::class, 'index']),
    Route::get('/', [HelloController::class, 'index']),
    Route::get('/hello/{name}', [HelloController::class, 'hello']),
    Route::get('/test/{string}', [HelloController::class, 'testing']),
];
