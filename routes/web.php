<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('intro');
})->name('intro');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    
    // Message API routes
    Route::post('/chat/messages', [\App\Http\Controllers\MessageController::class, 'store']);
    Route::get('/chat/conversations/{conversation}/messages', [\App\Http\Controllers\MessageController::class, 'getMessages']);
    Route::post('/chat/start', [\App\Http\Controllers\MessageController::class, 'startChat']);
});
