<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

// for Posts

Route::get('/', [PostController::class,'allposts'])->name('all');

Route::get('/create', [PostController::class,'createpage'])->name('create.page')->middleware('auth');

Route::post('/create', [PostController::class,'createpost'])->name('create.post')->middleware('auth');

Route::get('/blog/{id}',[PostController::class,'singlepost'])->name('singlepost');

Route::delete('/blog/{post}',[PostController::class,'deletepost'])->name('delete')->middleware('auth');



// Authentication routes

Route::get('/login',[UserControler::class,'Authpage'])->name('auth.page');

Route::post('/signup',[UserControler::class,'signup'])->name('signup');

Route::post('/login',[UserControler::class,'login'])->name('login');

Route::post('/logout',[UserControler::class,'logout'])->name('logout');



