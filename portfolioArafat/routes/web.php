<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/signup', [HomeController::class, 'register'])->name('register');
Route::post('/signup/submit', [HomeController::class, 'register_submit'])->name('register_submit');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login/submit', [HomeController::class, 'login_submit'])->name('login_submit');

Route::get('/dashboard/user', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/user/order_service', [DashboardController::class, 'orderService'])->name('orderService');
Route::get('/dashboard/user/my_order', [DashboardController::class, 'myOrder'])->name('myOrder');
Route::get('/dashboard/user/myProfile', [DashboardController::class, 'myProfile'])->name('myProfile');
Route::get('/dashboard/user/setting', [DashboardController::class, 'setting'])->name('setting');


Route::get('/dashboard/admin', [AdminController::class, 'adminPanel'])->name('adminPanel');
Route::get('/dashboard/admin/services', [AdminController::class, 'service'])->name('service');
Route::get('/dashboard/admin/order', [AdminController::class, 'order'])->name('order');
Route::get('/dashboard/admin/user', [AdminController::class, 'user'])->name('user');
Route::get('/dashboard/admin/team', [AdminController::class, 'team'])->name('team');
Route::get('/dashboard/admin/project', [AdminController::class, 'project'])->name('project');
Route::get('/dashboard/admin/blog', [AdminController::class, 'blog'])->name('blog');
Route::get('/dashboard/admin/testimonials', [AdminController::class, 'testimonials'])->name('testimonials');
Route::get('/dashboard/admin/pricing', [AdminController::class, 'pricing'])->name('pricing');
Route::get('/dashboard/admin/setting', [AdminController::class, 'setting'])->name('setting');
Route::get('/dashboard/admin/analytics', [AdminController::class, 'analytics'])->name('analytics');

Route::get('/dashboard/admin/signup', [AdminController::class, 'admin_auth'])->name('admin_auth');
Route::get('/dashboard/admin/login', [AdminController::class, 'admin_login'])->name('admin_login');


