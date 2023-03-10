<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

use App\Http\Controllers\UserController;

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

// Route::get('getAllProjects', 'ProjectController@getAllProjects');

// obtener usuarios
Route::get('getAllUsers', [UserController::class, 'getAllUsers']);
// insertar usuarios
Route::get('insertNewUser', [UserController::class, 'insertUser']);


//ruta para optener los proyectos
Route::get('getAllProjects', [ProjectController::class, 'getAllProjects']);
//ruta para insertar los proyectos
Route::get('insertNewProject', [ProjectController::class, 'insertProject']);
// para actualizar
Route::get('updateProject', [ProjectController::class, 'updateProject']);
// eliminar un projecto
Route::get('deleteProject', [ProjectController::class, 'deleteProject']);





