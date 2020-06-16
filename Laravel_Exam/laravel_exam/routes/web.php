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

Route::get('/', 'PageController@home');
Route::get('/blog', 'PostController@index');
Route::get('/about_as', 'PageController@about_as');
Route::get('/teachers', 'PageController@teachers');
Route::get('/pricing', 'PageController@pricing');
Route::get('/contact', 'PageController@contact');
Route::get('blog/', 'PostController@index')->name('post.index');
Route::get('create', 'PostController@create')->name('post.create');
Route::post('post/', 'PostController@store')->name('post.store');
Route::get('post/show/{id}', 'PostController@show')->name('post.show');
Route::get('/course-grid-2', 'PageController@course_grid_2');
Route::get('/course-grid-3', 'PageController@course_grid_3');
Route::get('/course-grid-4', 'PageController@course_grid_4');
Route::get('/blog-single', 'PageController@blog_single');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
