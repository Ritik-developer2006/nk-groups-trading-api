<?php

use App\Http\Controllers\testingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/mongo_db_check', [testingController::class, 'testMongo']);
Route::get('/mysql_db_check', [testingController::class, 'testMySql']);
Route::get('/sql_db_check', [testingController::class, 'testSql']);

require __DIR__.'/auth.php';
