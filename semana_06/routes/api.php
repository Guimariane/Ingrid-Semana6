<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('people', [PeopleController::class, 'index']);
Route::post('people', [PeopleController::class, 'store']);
Route::put('people/{id}', [PeopleController::class, 'update']);
Route::get('people/{id}', [PeopleController::class, 'show']);
Route::delete('people/{id}', [PeopleController::class, 'destroy']);





