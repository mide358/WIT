<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearnersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login.get');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'index'])->name('register.get');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
Route::get('/register-mentor', [RegisterController::class, 'mentor'])->name('register.mentor.get');
Route::get('/mentors/explore', [MentorsController::class, 'index'])->name('frontend.mentors.index');
Route::get('/mentor/{slug}', [MentorsController::class, 'find'])->name('frontend.mentor.find');
Route::get('/learners/suggestions', [LearnersController::class, 'suggestions'])->name('frontend.learners.suggestions');
Route::get('/learners/dashboard', [LearnersController::class, 'dashboard'])->name('frontend.learners.dashboard');
Route::get('artisan-call', function(){
   Artisan::call('migrate');
    Artisan::call('db:seed');
    Artisan::call('db:seed UserInterestSeeder');
    Artisan::call('optimize:clear');
});

Route::get('/courses/explore', [CourseController::class, 'index'])->name('frontend.courses.explore');
Route::get('/course/{slug}', [CourseController::class, 'find'])->name('frontend.course.find');
Route::middleware(['auth'])->group(function () {
    Route::prefix('learners')->group(function () {
        Route::get('/dashboard', [LearnersController::class, 'dashboard'])->name('frontend.learners.dashboard.index');
        Route::get('/connections', [LearnersController::class, 'connections'])->name('frontend.learners.dashboard.connections');
        Route::get('/messages', [LearnersController::class, 'messages'])->name('frontend.learners.dashboard.messages');
        Route::get('/profile', [LearnersController::class, 'profile'])->name('frontend.learners.dashboard.profile');
        Route::get('/courses', [LearnersController::class, 'courses'])->name('frontend.learners.dashboard.courses');
    });

    Route::get('/mentors/dashboard', [MentorsController::class, 'dashboard'])->name('frontend.mentors.dashboard.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('user/profile/{slug}', [PageController::class, 'profile'])->name('profile.get');
});

