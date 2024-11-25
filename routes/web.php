<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Foundation\Auth\User;
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

//rota:verbo http
Route::get('/', function () {



    return view('welcome');
});

Route::get('admin/usuarios', [UserController::class, 'index'], )->name('users.index');
Route::get(
    'admin/usuarios/cadastrar',
    [UserController::class, 'create']
)->name('users.create');

Route::post(
    'admin/usuarios/cadastrar',
    [UserController::class, 'store']
)->name("users.store");

Route::get('admin/usuarios/{user}', [UserController::class, 'getUser'], );
