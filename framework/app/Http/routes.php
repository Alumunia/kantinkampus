<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'FrontController@index');

//Auth Login
Route::get('/login', 'Auth\AuthMemberController@getLogin');
Route::post('/login', 'Auth\AuthMemberController@postLogin');

//Auth Registration
Route::get('/registration', 'Auth\AuthMemberController@getRegister');
Route::post('/registration', 'Auth\AuthMemberController@postRegister');

//About Me
Route::get('/aboutMe', 'Freelancer\FreelancerController@index');
