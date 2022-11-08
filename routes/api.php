<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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
// Route::get('allbuttons', [App\Http\Controllers\PostController::class, 'allbuttons']);

Route::get('getdata/{key?}',[App\Http\Controllers\PostController::class, 'getData']);
Route::get('dataget',[App\Http\Controllers\PostController::class, 'getDataAll']);
Route::post('editdata/{id}',[App\Http\Controllers\PostController::class, 'editData']);
Route::delete('deletedata/{id}',[App\Http\Controllers\PostController::class, 'deleteData']);
Route::post('insertdata',[App\Http\Controllers\PostController::class, 'insertData']);


Route::get('roles',[App\Http\Controllers\PostController::class, 'getRoles']);
Route::post('employeeByRoles',[App\Http\Controllers\PostController::class, 'employeeByRoles']);
Route::post('userImage',[App\Http\Controllers\PostController::class, 'userImage']);
Route::get('allEmployee',[App\Http\Controllers\PostController::class, 'allEmployee']);

Route::post('editUserImage',[App\Http\Controllers\PostController::class, 'editUserImage']);
Route::post('editEmployee',[App\Http\Controllers\PostController::class, 'editEmployee']);





