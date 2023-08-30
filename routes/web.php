<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/students/trash', [StudentController::class, 'trash'])->name('students.trash');
Route::delete('/students/trash/drop', [StudentController::class, 'dropAll'])->name('students.dropAll');
Route::delete('/students/trash/{team}/drop', [StudentController::class, 'drop'])->name('students.drop');
Route::patch('/students/{team}/restore', [StudentController::class, 'restore'])->name('students.restore');

Route::resource('students', StudentController::class);
