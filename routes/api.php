<?php

use App\Http\Controllers\ItemController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('/items' , [ItemController::class , 'index']);
route::prefix('/item')->group(function() {
    route::post('/store' , [ItemController::class , 'store']) ; 
    route::put('/{id}' , [ItemController::class , 'update']);
    route::delete('/{id}' , [ItemController::class , 'destroy']);
});

