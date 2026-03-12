<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/tarifs', [HomeController::class, 'tarifs'])->name('tarifs');

Route::get('/demo', [HomeController::class, 'benefices'])->name('benefices');

Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');

Route::get('/fonctionnal', [HomeController::class, 'fonctionnal'])->name('fonctionnal');

Route::get('/landing', [HomeController::class, 'landing'])->name('landing');

Route::get('/client/signup', [HomeController::class, 'register'])->name('register');

Route::get('/client/login', [HomeController::class, 'login'])->name('login');

Route::get('/affiliation', [HomeController::class, 'affiliation'])->name('affiliation');

Route::get('/affiliation/signup', [HomeController::class, 'affiliation_register'])->name('affiliation_register');

Route::get('/affiliation/login', [HomeController::class, 'affiliation_login'])->name('affiliation_login');

Route::get('/mention', [HomeController::class, 'mention'])->name('mention');

Route::get('/condition', [HomeController::class, 'condition'])->name('condition');

Route::get('/Politique-de-vie-privée', [HomeController::class, 'privee'])->name('privee');

Route::get('/Politique-de-Remboursement', [HomeController::class, 'remboursement'])->name('remboursement');

Route::get('/update', [HomeController::class, 'update'])->name('update');

Route::get('/service-statuts', [HomeController::class, 'status'])->name('status');

Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::get('/test', [HomeController::class, 'test'])->name('test');