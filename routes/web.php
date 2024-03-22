<?php

use App\Livewire\PostsComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');
    Route::get('/posts', PostsComponent::class)->name('posts');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
