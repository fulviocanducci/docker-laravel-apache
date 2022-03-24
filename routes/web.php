<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    SourceController,
    TestController
};

Route::get('/', function () { return view('welcome'); });
Route::get('/test', [TestController::class, 'index']);
Route::post('/test/create', [TestController::class, 'create']);
Route::get('/source', [SourceController::class, 'index']);
