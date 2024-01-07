<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

use App\Http\Controllers\FormController;
use App\Http\Resources\StudentResource;

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
    return view('welcome');
});



Route::get('/students', [FormController::class, 'showStudents'])->name('students.index');


Route::get('/students/{id}', [FormController::class, 'showStudent'])->name('students.show');


Route::post('/students', [FormController::class, 'storeStudent'])->name('students.store');


Route::put('/students/{id}', [FormController::class, 'updateStudent'])->name('students.update');


Route::delete('/students/{id}', [FormController::class, 'deleteStudent'])->name('students.delete');