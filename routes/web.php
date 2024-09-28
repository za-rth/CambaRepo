<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentications;
use App\Http\Controllers\Dashboard;


//Auth::routes(['login' => false]);

Route::get('/', function () {
    return view('splash');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', [Authentications::class, 'authView'])->name('login');

Route::get('/registration', [Authentications::class, 'registerView']);

Route::post('/registration',[Authentications::class,'registerAll'])->name('registerAll');

Route::get('/test',[Authentications::class,'loginEntry']);
Route::post('/login',[Authentications::class,'loginEntry'])->name('loginEnter');

Route::get('/dashboard',[Dashboard::class,'main'])->name('dashboard');
//Route::delete('/dashboard{id}',[Dashboard::class,'deleteAccount'])->name('dashboard.delete');