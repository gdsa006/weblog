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

Route::get('/', array('uses' => 'Controller@index'));

Route::get('/resources', array('uses' => 'Controller@resources'));

Route::get('/advocate/help', array('as' => 'help', 'uses' => 'Controller@helpForm'));

Route::get('/articles', array('uses' => 'Controller@blog', 'as' => 'articles',));

Route::get('/articles/{year}/{month}', array('uses' => 'Controller@filterData'));

Route::get('/articles/{slug}', array('uses' => 'Controller@blogPost'));

Route::get('/search', array('uses' => 'Controller@search'));

Route::get('/login', array('uses' => 'Controller@showLogin'));

Route::post('/login', array('uses' => 'Controller@doLogin'));

Route::get('/logout', array('uses' => 'Controller@doLogout'));

Route::get('/admin/dashboard', array('uses' => 'Controller@dashboard'));

Route::get('/admin/add-post', array('uses' => 'Controller@addPost'));

Route::get('/admin/edit-post', array('uses' => 'Controller@editPost'));

Route::get('/admin/delete-post', array('uses' => 'Controller@deletePost'));

Route::post('/admin/addNew/', array('uses' => 'Controller@addNewPost'));

Route::get('/admin/modify-post/{id}', array('uses' => 'Controller@modifyPost'));

Route::get('/admin/deletePost/{id}', array('uses' => 'Controller@removePost'));

Route::post('/admin/updatePost/{id}', array('uses' => 'Controller@updatePost'));

Route::post('/ajax_upload/action', array('uses' => 'Controller@action', 'as' => 'ajaxupload'));

Route::post('/help/mail', array('as' => 'mail', 'uses' => 'Controller@sendMail'));

Route::post('/contact/mail', array('as' => 'cmail', 'uses' => 'Controller@sendMailContact'));
