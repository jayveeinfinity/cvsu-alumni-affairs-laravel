<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\JobPostingController;
use App\Http\Controllers\Admin\AlumniProfileController;
use App\Http\Controllers\EducationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/signin', function () {
    return view('auth.signin');
})->name('signin');

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::get('/signout', [AuthController::class, 'logout'])->name('signout');

Route::get('/signup', [SignUpController::class, 'create'])->name('signup.create');
Route::post('/signup', [SignUpController::class, 'store'])->name('signup.store');

// Route::get('/approved/test', function() {
//     return view('mails.user_requests.welcome');
// });

// Route::get('/approved', function() {
//     $mailController = new MailController();
//     $mailController->sendWelcomeEmail('jayveeinfinity@gmail.com', 'John Vincent Bonza');
// });

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('admin')->group(function () {
        Route::get('/', function() {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/alumni-profiles', [AlumniProfileController::class, 'index'])->name('admin.alumni-profiles');
        Route::post('/alumni-profiles/import', [AlumniProfileController::class, 'import'])->name('admin.alumni-profiles.import');
        Route::post('/alumni-profiles', [AlumniProfileController::class, 'store'])->name('admin.alumni-profiles.store');
        Route::get('/job-postings', [JobPostingController::class, 'index'])->name('admin.job-postings');
        Route::get('/users', [UserController::class, 'index'])->name('admin.users');
        Route::get('/industries', [IndustryController::class, 'index'])->name('admin.industries');
        Route::post('/industries', [IndustryController::class, 'store'])->name('admin.industries.store');
    });

    /*
    |--------------------------------------------------------------------------
    | User Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('user')->group(function () {
        Route::get('/', function() {
            return redirect()->route('user.profile.index');
        });
        Route::get('/profile', [UserProfileController::class, 'index'])->name('user.profile.index');
        Route::get('/edit/{user_id}', [UserProfileController::class, 'edit'])->name('user.profile.edit');
        Route::post('/edit/{user_id}', [UserProfileController::class, 'update'])->name('user.profile.update');
        Route::post('/edit/education/store', [EducationController::class, 'store'])->name('user.profile.education.store');
    });
});