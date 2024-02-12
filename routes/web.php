<?php

use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\DokterControllers;
use App\Http\Controllers\FormControllers;
use App\Http\Controllers\ListControllers;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\MasterControllers;
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

Route::get('/login', function () {
    return view('loginregis/login');
});
Route::get('/register', function () {
    return view('loginregis/register');
});
Route::get('/', function () {
    return view('home/index');
});

Route::resource('dktr', DokterControllers::class);
Route::resource('login', LoginControllers::class);
Route::resource('dashboard', DashboardControllers::class);

Route::get('/masteruser', [MasterControllers::class, 'indexUser'])->name('masteruser-index');
Route::get('/masteruser/createform', [MasterControllers::class, 'formUser'])->name('masteruser-create');
Route::post('/masteruser/submit', [MasterControllers::class, 'submitUser'])->name('masteruser-submit');
Route::get('/masteruser/edit/{id}', [MasterControllers::class, 'editUser'])->name('masteruser-edit');
Route::put('/masteruser/update/{id}', [MasterControllers::class, 'updateUser'])->name('masteruser-update');
Route::delete('/masteruser/delete/{id}', [MasterControllers::class, 'deleteUser'])->name('masteruser-delete');

Route::get('/masterrole', [MasterControllers::class, 'indexRole'])->name('masterrole-index');
Route::get('/masterrole/createform', [MasterControllers::class, 'formRole'])->name('masterrole-create');
Route::post('/masterrole/submit', [MasterControllers::class, 'submitRole'])->name('masterrole-submit');
Route::get('/masterrole/edit/{id}', [MasterControllers::class, 'editRole'])->name('masterrole-edit');
Route::put('/masterrole/update/{id}', [MasterControllers::class, 'updateRole'])->name('masterrole-update');
Route::delete('/masterrole/delete/{id}', [MasterControllers::class, 'deleteRole'])->name('masterrole-delete');

Route::get('/masterabsen', [MasterControllers::class, 'indexAbsen'])->name('masterabsen-index');
Route::get('/masterabsen/createform', [MasterControllers::class, 'formAbsen'])->name('masterabsen-create');
Route::post('/masterabsen/submit', [MasterControllers::class, 'submitAbsen'])->name('masterabsen-submit');
Route::get('/masterabsen/edit/{id}', [MasterControllers::class, 'editAbsen'])->name('masterabsen-edit');
Route::put('/masterabsen/update/{id}', [MasterControllers::class, 'updateAbsen'])->name('masterabsen-update');
Route::delete('/masterabsen/delete/{id}', [MasterControllers::class, 'deleteAbsen'])->name('masterabsen-delete');

Route::get('/form', [FormControllers::class, 'index'])->name('form-index');
Route::get('/listtiket', [ListControllers::class, 'index'])->name('list-index');
