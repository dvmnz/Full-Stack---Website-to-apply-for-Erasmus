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
    return view('index');
});

Route::get('/LogIn', function () {
    return view('LogIn');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::post('/Dashboard', 'UsersController@Login');

Route::get('/Information', 'UniversitiesController@Index');

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/News', function () {
    return view('News');
});

Route::get('/cities','CitiesController@Index');

Route::get('/universities','UniversitiesController@Selected');

Route::get('/university/{id}','UniversitiesController@Show');

Route::get('/admin','UsersController@Index');
