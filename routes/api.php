<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\CategoryController;
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
Route::middleware('auth:sanctum')->group(function () {


    Route::post('/logout', [AuthController::class, "logout"]);
    Route::post('/create-category', [CategoryController::class, "createCategory"]);
    Route::post('/create-product', [ProductController::class, "createProduct"]);
});
Route::post('/create-order',[OrderController::class, "createOrder"]);





Route::post('/register', [AuthController::class, "register"]);
Route::post('/login', [AuthController::class, "login"]);
