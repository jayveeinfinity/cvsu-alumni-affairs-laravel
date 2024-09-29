<?php

use App\Models\UserRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ProfileController;

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
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/alumni-directory', function() {
            $date_type = 'All';
            $status = 'Confirmed';

            $userRequests = UserRequest::all();

            return view('admin.alumni-directory.index', compact('date_type', 'status', 'userRequests'));
        })->name('admin.alumni-directory');
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
        Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile.index');
        Route::get('/edit/{user_id}', [ProfileController::class, 'edit'])->name('user.profile.edit');
    });
});