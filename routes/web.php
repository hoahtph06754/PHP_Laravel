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

Route::get('login','AuthController@login_form')->name('auth.login_form');
Route::post('login','AuthController@login')->name('auth.login');
Route::post('logout','AuthController@logout')->name('auth.logout');
Route::group(['middleware' => 'check_login'], function() {
	Route::get('page','PageController@index')->name('page');
	Route::get('page/post/{id}','PageController@singlePost')->name('singlePost');
	Route::get('page/category/{id}','PageController@PostCategory')->name('page.category');
	Route::get('profile','PageController@profile')->name('profile');
	Route::post('profile/{id}','PageController@profileUpdate')->name('profile.update');
	
});
Route::group(['middleware' => ['check_login','check_role_admin']], function ()
{
	Route::resources([
    'users' => 'UserController',
    'categories' => 'CategoryController',
    'posts' => 'PostController',
    'comments' => 'CommentController',
]);
});

