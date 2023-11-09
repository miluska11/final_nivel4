<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolesController;

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



Route::get('/roles/create', function () {
    return view('create_role');
});


Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');


// Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');

