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
//     return view('index');
// });
Route::get('/', ['uses' => 'HomeController@randompost']);
Route::get('/gallery', ['uses' => 'HomeController@loadpost']);

Route::get('/about', function () {
    return view('about');
});

// Route::get('/gallery', function () {
//     return view('gallery');
// });

// Route::get('/login', function () {
//     return view('login/login');
// });

Route::get('/dashboard', function () {
    return view('dashboard/form');
});
Route::post('/dashboard', ['uses' => 'UserController@login']);
Route::get('/logout', ['uses' => 'UserController@logout']);
Route::get('/login', ['uses' => 'UserController@loginindex']);


Route::get('/signup', function () {
    return view('login/signup');
});
Route::post('/login', ['uses' => 'UserController@signup']);


Route::get('/post', ['uses' => 'HomeController@loadtable']);
// Route::get('/post', function () {
//     return view('dashboard/post');
// });
Route::post('/postnote', ['uses' => 'HomeController@createpost']);
Route::get('/update/{post_id}', ['uses' => 'HomeController@retrievepost'])->name('posts.update');
Route::patch('/update/save/{post_id}', ['uses' => 'HomeController@updatepost']);

Route::get('/DeletePost/{post_id}', ['uses' => 'HomeController@deletepost']);

Route::get('/blog', ['uses' => 'HomeController@loadblog']);

// Route::get('/blog', function () {
//     return view('blog');
// });

Route::get('/blog-details/{post_id}', ['uses' => 'HomeController@loadDetails']);

// Route::get('/blog-details', function () {
//     return view('blog-details');
// });

Route::get('/contact', function () {
    return view('contact');
});



