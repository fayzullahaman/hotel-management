<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UsersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Backend Route

// Route::get('/admin/dashboard', function () {
//     return view('backend.pages.dashboard');
// });

// Route::get('/admin/login', function () {
//     return view('backend.auth.login');
// });

// Route::get('/admin/register', function () {
//     return view('backend.auth.register');
// });

// Route::resource('/admin/user', UsersController::class);


// Frontend Route
Route::get('/', function () {
    return view('frontend.layouts.app');
});
Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/accomodation', function () {
    return view('frontend.pages.accomodation');
});
Route::get('/gallery', function () {
    return view('frontend.pages.gallery');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/blog_details', function () {
    return view('frontend.pages.blog_details');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    // Another line
    // Route::resource('user', UsersController::class);
});

Route::prefix('user')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    // Another line
    Route::resource('user', UsersController::class);
});