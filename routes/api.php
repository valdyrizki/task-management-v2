<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
//All secure URL's
    Route::get('/user/name', [UserController::class,'getName']);
    Route::get('/user', [UserController::class,'getAllUser']);

    //TASK
    Route::get('/task', [TaskController::class,'getAllTask']);
    Route::get('/task/find/{id}', [TaskController::class,'getById']);
    Route::get('/task/findbystatus/{sts}', [TaskController::class,'getByStatus']);
    Route::post('/task/save', [TaskController::class,'save']);
    Route::get('/task/paginate', [TaskController::class,'getPaginate']);
    Route::put('/task/update/status', [TaskController::class,'updateStatus']);
    Route::get('/task/counttask', [TaskController::class,'countTask']);

    //TASK-COMMENT
    Route::post('/taskcomment/save', [TaskCommentController::class,'save']);
    Route::get('/taskcomment/findbytaskid/{id}', [TaskCommentController::class,'findByTaskId']);

    //FILE
    Route::get('/file/download/{id}', [FileController::class,'download']);
    Route::get('/file/findbytaskid/{id}', [FileController::class,'findByTaskId']);

    //PROJECT
    Route::get('/project', [ProjectController::class,'getAllProject']);
    Route::get('/project/name', [ProjectController::class,'getName']);
    Route::post('/project/save', [ProjectController::class,'save']);
    Route::get('/project/paginate', [ProjectController::class,'getPaginate']);

});

Route::post('/login', [UserController::class,'login']);
Route::post('/register', [UserController::class,'register']);

//1|97jz87c2KJHCAiRsUIl7qtGzgOvMip72cXGSE1O7
