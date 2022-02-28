<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

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

Route::post('newsletter',NewsletterController::class);

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/post/{post:slug}',[PostController::class,'show']);

Route::get('/register',[RegisterController::class,'create'])->name('register')->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->name('store')->middleware('guest');

Route::get('/login',[SessionController::class,'create'])->name('login')->middleware('guest');
Route::post('/session',[SessionController::class,'store'])->middleware('guest');

Route::post('/logout',[SessionController::class,'destroy'])->name('logout')->middleware('auth');

Route::post('/post/{post:slug}/comments',[CommentController::class,'store'])->name('comment');


