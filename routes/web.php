<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Website\Home\HomeController;
use App\Http\Controllers\Website\Profile\ProfileController;
use App\Http\Controllers\Website\About\AboutController;
use App\Http\Controllers\Website\Earning\EarningController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\CP\ChangepasswordController;


Route::group(['middleware' => ['auth']], function () {

    /**
     * User routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home')->withoutMiddleware(['auth']);
    Route::get('/about-us', [AboutController::class, 'about'])->name('about')->withoutMiddleware(['auth']);
    Route::get('/about-earning', [EarningController::class, 'earning'])->name('earning')->withoutMiddleware(['auth']);


    Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile')->middleware(['profile_verification']);
    Route::get('/profile-verification', [ProfileController::class, 'profileVerfication'])->name('user.profileVerification');
    Route::get('/profile-buy-followers', [ProfileController::class, 'buyFolowers'])->name('user.buyFollowers');

    Route::get('/user/login', [AuthController::class, 'userLogin'])->name('user.login')->withoutMiddleware(['auth'])->middleware(['remember_me']);
    Route::get('/user/register', [AuthController::class, 'userRegister'])->name('user.register')->withoutMiddleware(['auth']);

    Route::post('/user/registered', [AuthController::class, 'attemptRegister'])->name('user.attemptRegister')->withoutMiddleware(['auth']);;
    Route::post('/user/loggedin', [AuthController::class, 'loginAttempt'])->name('user.loginAttempt')->withoutMiddleware(['auth']);
    Route::get('/change-password', [ProfileController::class, 'setting'])->name('user.setting');
    Route::post('/changed-password', [ProfileController::class, 'change_password'])->name('user.change_password');


    Route::get('/attempt/logout', [AuthController::class, 'logout'])->name('user.logout');


    /**
     * Admin routes
     */
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/users', [UserController::class, 'users'])->name('admin.users');
    Route::get('/admin/change-password', [ChangepasswordController::class, 'change_password'])->name('admin.change_password');
});
