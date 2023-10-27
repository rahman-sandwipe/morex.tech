<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;

/*---------------| Auth Routes |---------------*/
require __DIR__.'/auth.php';
/*---------------| Web Routes |---------------*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'show'])->name('service');
Route::get('/about-us', [AboutsController::class, 'index'])->name('abouts');
Route::get('/our-projects', [ProjectsController::class, 'show'])->name('projects');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');
Route::get('/article', [BlogsController::class, 'view'])->name('blogs');
Route::get('/contact-us', [ContactsController::class, 'index'])->name('contacts');


Route::get('/team/{username}', [ProfileController::class, 'index'])->name('profile');


