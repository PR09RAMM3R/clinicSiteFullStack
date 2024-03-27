<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\ClientController;

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


Route::get('/', [PageController::class, 'index']);
Route::get('/shifokorlar', [PageController::class, 'doctors'])->name('doctors');
Route::get('/xizmatlar', [PageController::class, 'services'])->name('service');
Route::get('/signin', [PageController::class, 'signin'])->name('signin');
Route::get('/royxatdanOtish', [PageController::class, 'signup'])->name('signup');
Route::get('/adminPage', [PageController::class, 'admin'])->name('admin');


Route::post('authenticate', [UsersController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [UsersController::class, 'logout'])->name('logout');
Route::post('register', [UsersController::class, 'register_store'])->name('registor.store');
Route::get('/profile/{login}', [UsersController::class, 'showProfile'])->name('showProfile');
Route::put('/profile/{login}/edit', [UsersController::class, 'updateProfile'])->name('profile.update');


Route::get('/shifokorlar/qoshish', [DoctorsController::class, 'create'])->name('doctors.create');
Route::post('/shifokorlar/qoshish', [DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/shifokorlar/{shifokor}', [DoctorsController::class, 'show'])->name('doctors.show');
Route::get('/shifokorlar/{shifokor}/tahrirlash', [DoctorsController::class, 'edit'])->name('doctors.edit');
Route::post('/shifokorlar/{shifokor}/tahrirlash', [DoctorsController::class, 'update'])->name('doctors.update');
Route::delete('/shifokorlar/{shifokor}/ochirish', [DoctorsController::class, 'destroy'])->name('doctors.delete');


Route::get('/adminPge/xizmatlar', [ServiceController::class, 'index'])->name('services.index');
Route::get('/adminPge/xizmatlar/qoshish', [ServiceController::class, 'create'])->name('services.create');
Route::post('/adminPge/xizmatlar/qoshish', [ServiceController::class, 'store'])->name('services.store');
Route::get('/adminPge/xizmatlar/{xizmat}/tahrirlash', [ServiceController::class, 'edit'])->name('services.edit');
Route::post('/adminPge/xizmatlar/{xizmat}/tahrirlash', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/adminPge/xizmatlar/{xizmat}/ochirish', [ServiceController::class, 'destroy'])->name('services.delete');


Route::get('/clientadmin', [ClientController::class, 'index'])->name('client.index');
Route::get('/clientadmin/{client}/ochirish', [ClientController::class, 'destroy'])->name('client.delete');