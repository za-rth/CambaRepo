<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentications;
use App\Http\Controllers\Dashboard;


//Auth::routes(['login' => false]);

Route::get('/', function () {
    return view('splash.master');
});
Route::get('/welcome', function () {
    return view('welcome');
});


//Route::get('/register', [Authentications::class, 'registerView']);
Route::get('/login', [Authentications::class, 'authView'])->name('login');
/*Route::prefix('authenticate')->group(function (){
    Route::post('/login',[Authentications::class,'loginEntry'])->name('loginEnter');
    Route::post('/register',[Authentications::class,'registration'])->name('register');
});*/

Route::get('/login', [Authentications::class, 'authView'])->name('login');
Route::post('/authenticate',[Authentications::class, 'process'])->name('auth.process');

Route::get('/dashboard',[Dashboard::class,'main'])->name('dashboard');
//Route::delete('/dashboard{id}',[Dashboard::class,'deleteAccount'])->name('dashboard.delete');

Route::delete('/dashboard',[Dashboard::class,'deleteAccount'])->name('deleteAccount');
Route::get('/dashboard/profile', [Dashboard::class, 'profile'])->name('dash-profile');