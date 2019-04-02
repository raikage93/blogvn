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
Route::get('/',[
    'as'=>'home',
    'uses'=>'PagesController@getIndex'
]);
Route::get('post/{post}',[
    'as'=>'post',
    'uses'=>'PagesController@getPost'
]);
Route::get('about',[
    'as'=>'about',
    'uses'=>'PagesController@getAbout'
]);
Route::get('contact',[
    'as'=>'contact',
    'uses'=>'PagesController@getContact'
]);

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function() {
    Route::get('home',[
        'as'=>'admin.home',
        'uses'=>'PagesController@getHome'
    ]);
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');
    Route::resource('category', 'CategoryController');
});
