<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainControl;

use App\Http\Controllers\ProjectController;

use App\Http\Controllers\AdminController;

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
    return view('main');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/main', [App\Http\Controllers\MainControl::class, 'index'])->name('main');

Route::get('/main', function () {
    return view('main');
});

Route::get('/form', function () {
    return view('add-project');
});

Route::get('/user', [AdminController::class, 'user']);

// Route::get('/user/{xx}', [AdminController::class, 'specificUser']);

Route::get('/redirect', [ProjectController::class, 'redirectFunc']);

Route::POST('projects', [ProjectController::class, 'register']);

Route::get('add', [ProjectController::class, 'add']);

Route::get('/list', [ProjectController::class, 'projectList']);

Route::get('/del/{xx}', [ProjectController::class, 'deleteProject']);

Route::get('/search/{xx}', [ProjectController::class, 'findProject']);

Route::post('edit', [ProjectController::class, 'updateProject']);
