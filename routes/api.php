<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/category', [CategoryController::class, 'show']);

Route::get('/subcategory', [SubcategoryController::class, 'index']);
Route::get('/search', [SubcategoryController::class, 'search']);
Route::get('/subcategory/{subcategory:category_id}', [SubcategoryController::class, 'show']);
Route::get('/subcategory/{subcategory:id}/details', [SubcategoryController::class, 'see']);
