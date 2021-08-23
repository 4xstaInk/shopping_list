<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/profile', Profile::class)->name('profile');