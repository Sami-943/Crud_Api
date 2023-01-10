<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// this route is create data.
Route::post('/student',[Apicontroller::class,'create']);

// this route is read all data into the database.
Route::get('/read',[Apicontroller::class,'showdata']);

//this route is read data into throw by id into database.
Route::get('/readdata/{id}',[Apicontroller::class,'showdataid']);

// this route is updatedata throw by id.
Route::post('/updatedata/{id}',[Apicontroller::class,'updatedataid']);

// this route is deletedata throw by id.
Route::delete('/deletedata/{id}',[Apicontroller::class,'deletedataid']);

 