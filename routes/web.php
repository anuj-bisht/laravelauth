<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('data', [App\Http\Controllers\PostController::class, 'index'])->name('users.index');
Route::post('adddata', [App\Http\Controllers\PostController::class, 'store'])->name('addData');
Route::post('editdata', [App\Http\Controllers\PostController::class, 'editDataStore'])->name('editData');
Route::get('/delete-data/{id}', [App\Http\Controllers\PostController::class, 'deleteData']);


Route::get('form1', [App\Http\Controllers\PostController::class, 'form1']);
Route::get('form2', [App\Http\Controllers\PostController::class, 'form2']);
Route::get('form3', [App\Http\Controllers\PostController::class, 'form3']);
Route::get('popupform1', [App\Http\Controllers\PostController::class, 'popupform1']);

Route::get('multistepform1', [App\Http\Controllers\PostController::class, 'multistepform1']);
Route::get('multistepform2', [App\Http\Controllers\PostController::class, 'multistepform2']);

Route::get('pagination1', [App\Http\Controllers\PostController::class, 'pagination1']);
Route::get('card1', [App\Http\Controllers\PostController::class, 'card1']);
Route::get('card2', [App\Http\Controllers\PostController::class, 'card2']);
Route::get('card3', [App\Http\Controllers\PostController::class, 'card3']);
Route::get('card4rotate', [App\Http\Controllers\PostController::class, 'card4rotate']);
Route::get('card5', [App\Http\Controllers\PostController::class, 'card5']);
Route::get('card6', [App\Http\Controllers\PostController::class, 'card6']);


Route::get('pricecard1', [App\Http\Controllers\PostController::class, 'pricecard1']);
Route::get('contactusform1', [App\Http\Controllers\PostController::class, 'contactusform1']);
Route::get('contactusform2', [App\Http\Controllers\PostController::class, 'contactusform2']);
Route::get('imageprogressbar', [App\Http\Controllers\PostController::class, 'imageprogressbar']);


Route::get('searchbox1', [App\Http\Controllers\PostController::class, 'searchbox1']);
Route::get('loginregistration', [App\Http\Controllers\PostController::class, 'loginregistration']);
Route::get('allbuttons', [App\Http\Controllers\PostController::class, 'allbuttons']);
Route::get('design', [App\Http\Controllers\PostController::class, 'design']);









Route::get('modaldata', [App\Http\Controllers\PostController::class, 'modaldata']);
Route::get('getdata/{key?}',[App\Http\Controllers\PostController::class, 'getData']);

Route::get('news',[App\Http\Controllers\PostController::class, 'getNews']);

Route::view('testForm','addform');
Route::post('AddData',[App\Http\Controllers\PostController::class, 'AddDataa']);
Route::get('getData',[App\Http\Controllers\PostController::class, 'GetDataa']);
Route::get('editData/{post}',[App\Http\Controllers\PostController::class, 'EditDataa']);
Route::get('updateData/{post}',[App\Http\Controllers\PostController::class, 'UpdateDataa']);


 Route::get('login',[App\Http\Controllers\PostController::class, 'login']);
 Route::group(
    ['middleware'  =>  'checkRole'],function ($router) {
    Route::post('home',[App\Http\Controllers\PostController::class, 'tohome'])->name('toHome');
});





