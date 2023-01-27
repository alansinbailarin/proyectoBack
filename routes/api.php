<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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
Route::get('/students', [StudentController::class, 'getAllStudents']);
Route::get('/student/id/{id}', [StudentController::class, 'getStudentById']);
Route::get('/student/serial/{serialNumber}', [StudentController::class, 'getStudentBySerialNumber']);
Route::post('/student/create', [StudentController::class, 'createStudent']);
Route::put('/student/update/{id}', [StudentController::class, 'updateStudent']);
Route::delete('/student/delete/{id}', [StudentController::class, 'deleteStudent']);