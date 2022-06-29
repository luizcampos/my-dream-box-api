<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\UserController;
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

//======= METAS =======
//get todas as goals
Route::get('goals',[GoalController::class,'getGoals']); //nome da classe de GoalController

//get todas as goal by id
Route::get('goal/{id}',[GoalController::class,'getGoalById']);

//add goal
Route::post('addGoal',[GoalController::class,'addGoal']);

//update goal
Route::put('updateGoal/{id}',[GoalController::class,'updateGoal']);

//delete user
Route::delete('deleteGoal/{id}',[GoalController::class,'deleteGoal']);



//======= USUÁRIO =======
//get todos os users
Route::get('users',[UserController::class,'getUsers']); //nome da classe de GoalController

//get todos as users by id
Route::get('users/{id}',[UserController::class,'getUserById']);

//add user
Route::post('addUser',[UserController::class,'addUser']);

//update user
Route::put('updateUser/{id}',[UserController::class,'updateUser']);

//delete user
Route::delete('deleteUser/{id}',[UserController::class,'deleteUser']);