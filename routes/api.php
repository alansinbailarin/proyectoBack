<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;


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

// Students routes
Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/id/{id}', [StudentController::class, 'shows']);
Route::get('/student/serial/{serialNumber}', [StudentController::class, 'show']);
Route::post('/student/createStudent', [StudentController::class, 'store']);
//Route::post('/student/createStudent/{serialNumber}/{profile_id}/{career_id}/{group_id}', [StudentController::class, 'store']);
Route::post('/student/update', [StudentController::class, 'update']);
Route::post('/student/destroy', [StudentController::class, 'destroy']);

// groups routes
Route::get('/groups', [GroupController::class, 'index']);
Route::get('/group/id/{id}', [GroupController::class, 'show']);
Route::post('/group/createGroup', [GroupController::class, 'store']);
Route::put('/group/update/{id}', [GroupController::class, 'update']);
Route::delete('/group/destroy/{id}', [GroupController::class, 'destroy']);
