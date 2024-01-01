<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\SkillsController as AdminSkills;
use App\Http\Controllers\Admin\UserController as AdminUsers;
use App\Http\Controllers\Admin\FaqController as AdminFaqs;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
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
Route::get('/faqs', [HomeController::class, 'faqs'])->name('frontend.faqs');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [HomeController::class, 'postContact'])->name('frontend.contact.post');

Route::get('/admin/login', [AdminLogin::class, 'index'])->name('admin.login.get');
Route::post('/admin/login', [AdminLogin::class, 'login'])->name('admin.login.post');
Route::get('404', function(){
   return view('404');
})->name('404');

Route::get('artisan-call', function(){
   Artisan::call('migrate');
    Artisan::call('db:seed');
    Artisan::call('db:seed UserInterestSeeder');
    Artisan::call('optimize:clear');
});

Route::get('/courses/explore', [CourseController::class, 'index'])->name('frontend.courses.explore');
Route::get('/course/{slug}', [CourseController::class, 'find'])->name('frontend.course.find');
Route::get('/forum', [ForumController::class, 'index'])->name('frontend.forum.index');
Route::middleware(['auth'])->group(function () {
    Route::prefix('learners')->group(function () {
        Route::get('/dashboard', [LearnersController::class, 'dashboard'])->name('frontend.learners.dashboard.index');
        Route::get('/connections', [LearnersController::class, 'connections'])->name('frontend.learners.dashboard.connections');
        Route::get('/messages', [LearnersController::class, 'messages'])->name('frontend.learners.dashboard.messages');
        Route::get('/profile', [LearnersController::class, 'profile'])->name('frontend.learners.dashboard.profile');
        Route::get('/courses', [LearnersController::class, 'courses'])->name('frontend.learners.dashboard.courses');
    });
    Route::prefix('mentors')->group(function () {
        Route::get('/dashboard', [MentorsController::class, 'dashboard'])->name('frontend.mentors.dashboard.index');
        Route::get('/connections', [MentorsController::class, 'connections'])->name('frontend.mentors.dashboard.connections');
        Route::get('/messages', [MentorsController::class, 'messages'])->name('frontend.mentors.dashboard.messages');
        Route::get('/profile', [MentorsController::class, 'profile'])->name('frontend.mentors.dashboard.profile');
        Route::get('/courses', [MentorsController::class, 'courses'])->name('frontend.mentors.dashboard.courses');
        Route::post('/connect', [MentorsController::class, 'connect'])->name('frontend.mentor.connect');
    });
    Route::post('/profile', [RegisterController::class, 'update'])->name('profile.update');
    Route::get('/forum/comment/reply/{id}', [ForumController::class, 'find'])->name('forum.comment.find');
    Route::post('/forum/comment', [ForumController::class, 'store'])->name('forum.comment.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('user/profile/{slug}', [PageController::class, 'profile'])->name('profile.get');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [AdminLogin::class, 'logout'])->name('admin.logout');
        Route::get('/users', [AdminUsers::class, 'index'])->name('admin.users.index');
        Route::get('/skills', [AdminSkills::class, 'index'])->name('admin.skills.index');
        Route::get('/skills/create', [AdminSkills::class, 'create'])->name('admin.skills.create');
        Route::post('/skills/create', [AdminSkills::class, 'store'])->name('admin.skills.store');
        Route::get('/skills/edit/{id}', [AdminSkills::class, 'edit'])->name('admin.skills.edit');
        Route::post('/skills/edit/{id}', [AdminSkills::class, 'update'])->name('admin.skills.update');
        Route::get('/faqs', [AdminFaqs::class, 'index'])->name('admin.faqs.index');
        Route::get('/faqs/create', [AdminFaqs::class, 'create'])->name('admin.faqs.create');
        Route::post('/faqs/create', [AdminFaqs::class, 'store'])->name('admin.faqs.store');
        Route::get('/faq/edit/{id}', [AdminFaqs::class, 'edit'])->name('admin.faq.edit');
        Route::post('/faq/edit/{id}', [AdminFaqs::class, 'update'])->name('admin.faq.update');
    });
});

