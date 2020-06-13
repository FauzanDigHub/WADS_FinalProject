<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Load Home
Route::get('/homecs','ApiController@randompostcs');
Route::get('/homedesign','ApiController@randompostdesign');
Route::get('/homeib','ApiController@randompostib');
Route::get('/homebmm','ApiController@randompostbmm');
Route::get('/homefip','ApiController@randompostfip');
Route::get('/homebis','ApiController@randompostbis');
Route::get('/homecomm','ApiController@randompostcomm');

// load post in gallery and also for home 
Route::get('/gallerycs','ApiController@loadpostcs');
Route::get('/gallerydesign','ApiController@loadpostdesign');
Route::get('/galleryib','ApiController@loadpostib');
Route::get('/gallerybmm','ApiController@loadpostbmm');
Route::get('/galleryfip','ApiController@loadpostfip');
Route::get('/gallerybis','ApiController@loadpostbis');
Route::get('/gallerycomm','ApiController@loadpostcomm');

// load table
Route::get('/postcs','ApiController@loadpostcs');
Route::get('/postdesign','ApiController@loadpostdesign');
Route::get('/postib','ApiController@loadpostib');
Route::get('/postbmm','ApiController@loadpostbmm');
Route::get('/postfip','ApiController@loadpostfip');
Route::get('/postbis','ApiController@loadpostbis');
Route::get('/postcomm','ApiController@loadpostcomm');

// blog page load
Route::get('/blogcs','ApiController@loadpostcs');
Route::get('/blogdesign','ApiController@loadpostdesign');
Route::get('/blogib','ApiController@loadpostib');
Route::get('/blogbmm','ApiController@loadpostbmm');
Route::get('/blogfip','ApiController@loadpostfip');
Route::get('/blogbis','ApiController@loadpostbis');
Route::get('/blogcomm','ApiController@loadpostcomm');
Route::get('/getUserID','ApiController@getUserID');
Route::get('/getDetailPost','ApiController@getDetailPost');
Route::get('/getImageUrl','ApiController@getImageUrl');
Route::get('/getAllPost','ApiController@getAllPost');
Route::get('/getLastID','ApiController@getLastID');

// blog-details load
Route::get('/blog-detail/{post_id}', 'ApiController@loadDetails');

// deletepost
Route::delete('/deletepost/{post_id}','ApiController@deletepost');

// Signup
Route::post('/signup','ApiController@store');

//login
Route::post('/login','ApiController@login');


Route::patch('/updatePost','ApiController@updatePost');
Route::post('/createPost','ApiController@createPost');