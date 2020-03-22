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
// Home page
Route::get('/', 'SiteController@home')->name('home');

//Shop psge
Route::get('/shop', 'SiteController@shop')->name('shop');

// About Us 
Route::get('/about', 'SiteController@about')->name('about');
//Blog
Route::get('/blog','SiteController@blog')->name('blog');
//Contact
Route::get('/contact', 'SiteController@contact')->name('contact');
//Admin routes
Route::prefix('admin')->group(function(){
    Route::resource('posts','Admin\PostsController');
}); 