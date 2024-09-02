<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserRequestController;
use App\Models\UserRequest;

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

Route::get('/signup', [UserRequestController::class, 'create'])->name('signup');
Route::post('/signup', [UserRequestController::class, 'store'])->name('userquest.store');

Route::get('/approved/test', function() {
    return view('mails.user_requests.welcome');
});

Route::get('/approved', function() {
    $mailController = new MailController();
    $mailController->sendWelcomeEmail('jayveeinfinity@gmail.com', 'John Vincent Bonza');
});

Route::prefix('user')->group(function () {
    Route::get('/', function() {
        return redirect()->route('user.profile.index');
    });
    Route::get('/profile', function () {
        $patronData = [
            'sex' => 'male',
            'address' => 'Indang, Cavite',
            'phone' => '0995 912 1524',
            'cardnumber' => '201414600',
            'categorycode' => 'Admin',
            'sort2' => 'CEIT',
            'sort1' => 'BSIT',
            'dateexpiry' => '2024-06-22'
        ];
        return view('profile.index', compact('patronData'));
    })->name('user.profile.index');
});

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
        // Route::get('/', function() {
        //     return redirect()->route('user.profile.index');
        // });
        // Route::get('/profile', function () {
        //     return view('profile.index');
        // })->name('user.profile.index');
    });
});