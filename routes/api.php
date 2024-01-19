<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeoplesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('add-peoples',[PeoplesController::class,'adding']);
Route::put('edit-peoples',[PeoplesController::class,'edit']);
Route::delete('delete-peoples',[PeoplesController::class,'delete']);
Route::get('getdata',[PeoplesController::class,'getdata']);