<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDestroyController;
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


Route::get('', [ProjectController::class, 'index'])->name('index');

Route::post('submit', [ContactFormController::class, 'submit'])->name('contact');

Route::resource('projects', ProjectController::class, [
    'except'    => [
        'index', 'show'
    ]
])->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest')->name('login.authenticate');

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
