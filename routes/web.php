<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('index', function () {
    return view('index');
});


Route::get('/', [FrontendController::class, 'home']);

Route::get('/about', [FrontendController::class, 'about']);

Route::get('/features', [FrontendController::class, 'features']);

Route::get('/pricing', [FrontendController::class, 'pricing']);

Route::get('/contact', [FrontendController::class, 'contact']);

Route::get('/retail', [FrontendController::class, 'retail']);