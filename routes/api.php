<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Api\ProductController;
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

// Api
// http://127.0.0.1:8000/api/list_product
Route::get('list_product',[ProductController::class,'getListProduct']);// lấy toàn bộ danh sách
Route::get('product/{idProduct}',[ProductController::class,'getProduct']);// Lấy 1 id danh sách
Route::post('product',[ProductController::class,'addProduct']); // Thêm mới product

