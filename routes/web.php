<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomepageController::class, 'index']) -> name('home');
Route::get('/articles', [ArticlesController::class, 'index']) -> name('articles');
Route::get('/spillthetea', [ContactController::class, 'index']) -> name('contact');


//create articles route (previous posts)
//create contact route get
//create contact route post
