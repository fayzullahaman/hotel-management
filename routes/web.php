<?php

use Illuminate\Support\Facades\Route;

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