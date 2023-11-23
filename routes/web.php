<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/builder-tables/create' , 'builder-tables/create');
Route::post('/builder-tables/create' , \App\Http\Controllers\BuilderCreateTableController::class);
Route::get('/builder-tables/show/{tablename}' , \App\Http\Controllers\BuilderShowTableController::class);
Route::get('/builder-tables/create/{tablename}' , \App\Http\Controllers\ShowCrudCreateController::class);
Route::post('/builder-tables/create/{tablename}' , \App\Http\Controllers\CrudCreateController::class);
