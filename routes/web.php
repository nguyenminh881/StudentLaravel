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

Route::get('/', function () {
    return view('welcome');
});

Route::get('student_manager', [StudentController::class, 'index']);

 
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students/create', [StudentController::class, 'store']);
Route::get('edit_student/{id}', [StudentController::class, 'edit']);
Route::post('edit_student/{id}', [StudentController::class, 'update']);
Route::get('delete_student/{id}', [StudentController::class, 'delete']);