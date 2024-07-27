<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerJob;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\resumeController;
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

Route::resources([
    'categories' => JobCategoryController::class,
    'job' => JobController::class,
    'resume' => resumeController::class
]);

Route::middleware(['web'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/auth/login', 'login');
        Route::post('/auth/register', 'register');
        Route::get('/auth/get-user-login', 'getUser');
        Route::get('/logout','logout');
    });
});
Route::get('/popular-jobs',[JobController::class,'popularJobs']);
Route::controller(EmployerJob::class)->group(function(){
    Route::get('employer/{id}/my-jobs','index');
});
