<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index'])->name('index');
// 127.0.0.1:8000/create

Route::middleware(['auth.check'])->group(function() {
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/create', [StudentController::class, 'insert']);

    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [StudentController::class, 'update']);

    Route::delete('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
