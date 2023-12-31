<?php

use App\Http\Controllers\Api\V1\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('myapi', [ApiController::class, 'index']);

Route::prefix('v1')->group(function(){

    Route::apiResource('students', StudentController::class);
    // Route::get('students/{$student}', [StudentController::class,'show']);

});

