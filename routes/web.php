<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addpost', function () {
    return view('addpost');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});




Auth::routes();
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/post/{id}', 'DetailPostController@detailpost');

Route::get('/addpost', 'AddPostController@index');

Route::post('/addpost/new', 'AddPostController@addnewpost');

Route::get('/editprofile', 'EditProfileController@index');

Route::post('/editprofile/update', 'EditProfileController@updateee');

Route::post('/addcomment', 'DetailPostController@comment');

/*
Route::get('/profile', function () {
    return view('profile');
});
*/