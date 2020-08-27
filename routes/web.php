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


Route::get('dashboard' , 'DashboardController@index');
Route::get('create-category' , 'CategoryController@create');


//-------------------------------Category Route---------------------------------
// to add category
Route::post('post-category-form' , 'CategoryController@store');

// to show all category page
Route::get('all-category' , 'CategoryController@index');

// to edit page
Route::get('edit-category/{id}' , 'CategoryController@edit');

// to update category
Route::post('update-category/{id}' , 'CategoryController@update');

// to delete category
Route::get('delete-category/{id}' , 'CategoryController@destroy');


//-------------------------------Blog Route---------------------------------
// to add blog
Route::get('get-blog-post-form' , 'BlogPostController@create');

// to store blog post
Route::post('store-blog-post' , 'BlogPostController@store');

// to show all category page
Route::get('all-bloc-posts' , 'BlogPostController@index');


// to edit page
Route::get('edit-blog-post/{id}' , 'BlogPostController@edit');

// to update blog post
Route::post('update-blog-post/{id}' , 'BlogPostController@update');

// to delete blog post
Route::get('delete-blog-post/{id}' , 'BlogPostController@destroy');
