<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('students',[StudentController::class,'index']);
Route::post('add-student',[StudentController::class,'store']);
Route::get('edit-student/{id}',[StudentController::class,'edit']);
Route::post('update-student',[StudentController::class,'update']);
Route::delete('delete-student',[StudentController::class,'destroy']);
Route::get('/', function () {
    return view('welcome');
});
