<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'allposts'])->name('all');

Route::get('/create', [PostController::class,'createpage'])->name('create.page');

Route::post('/create', [PostController::class,'createpost'])->name('create.post');

Route::get('/login',[UserControler::class,'Authpage'])->name('auth.page');

Route::post('/signup',[UserControler::class,'signup'])->name('signup');

Route::post('/login',[UserControler::class,'login'])->name('login');

Route::post('/logout',[UserControler::class,'logout'])->name('logout');



