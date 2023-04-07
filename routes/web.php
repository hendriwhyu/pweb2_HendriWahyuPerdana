<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProyekController;

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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });
Route::middleware(['auth', 'is-Role'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::get('/kelolauser', [UserController::class, 'show']);
    Route::get('/kelolauser/{id}', [UserController::class, 'show']);
    Route::get('/kelolauser-add', function () {
        return view('admin.kelolauser-add');
    });
    Route::get('/kelolauser-edit/{id}', [UserController::class, 'edit']);
    Route::post('/kelolauser', [UserController::class, 'create']);
    Route::post('/kelolauser/{id}', [UserController::class, 'delete']);
    Route::put('/kelolauser-edit/{id}', [UserController::class, 'update']);
    Route::get('/kelolauser-delete/{id}', [UserController::class, 'delete']);
    Route::delete('/kelolauser-delete/{id}', [UserController::class, 'destroy']);
    Route::get('/kelolaproyek', [ProyekController::class, 'index']);
    Route::get('/kelolaproyek/{id}', [ProyekController::class, 'show']);
    Route::get('/kelolaproyek-add', function () {
        return view('admin.kelolaproyek-add');
    });
    Route::get('/kelolaproyek-edit/{id}', [ProyekController::class, 'edit']);
    Route::post('/kelolaproyek', [ProyekController::class, 'store']);
    Route::post('/kelolaproyek/{id}', [ProyekController::class, 'delete']);
    Route::put('/kelolaproyek-edit/{id}', [ProyekController::class, 'update']);
    Route::get('/kelolaproyek-delete/{id}', [ProyekController::class, 'delete']);
    Route::delete('/kelolaproyek-delete/{id}', [ProyekController::class, 'destroy']);
});


Route::middleware(['auth', 'is-Role'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);
    
});
