<?php

use App\Http\Controllers\testingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/mongo_db_check', [testingController::class, 'testMongo']);

require __DIR__.'/auth.php';
