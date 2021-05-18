<?php

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LogoutController::class, 'store'])->name('auth.logout')->middleware('auth');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::middleware(['auth'])->name('admin.')->group(function(){
    Route::get('/admin/blog', [AdminBlogController::class, 'index'])->name('blogIndex');
    Route::get('/admin/blog/create', [AdminBlogController::class, 'create'])->name('blogCreate');
    Route::post('/admin/blog/insert', [AdminBlogController::class, 'store'])->name('blogStore');
    Route::get('/admin/blog/edit/{slug}', [AdminBlogController::class, 'edit'])->name('blogEdit');
    Route::get('/admin/blog/detail/{slug}', [AdminBlogController::class, 'detail'])->name('blogDetail');
    Route::put('/admin/blog/{id}', [AdminBlogController::class, 'update'])->name('blogUpdate');
    Route::delete('/admin/blog/{id}', [AdminBlogController::class, 'delete'])->name('blogDelete');
});

Route::middleware(['guest'])->name('auth.')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/signup', [SignupController::class, 'index'])->name('signup');
    Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
});
