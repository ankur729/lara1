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


Route::get('/test', function () {
    return view('layouts.master.admin.index');
});



// MANAGE SUPER ADMIN ROUTES


Route::get('/admin_login', function () {
    return view('pages.admin.login.login');
});

Route::get('/test/check', function () {
    return view('pages.super-admin.login.login');
});


Route::post('/admin_login_validate', 'AdminLoginController@login_check');
Route::get('/admin_logout','AdminLoginController@logout');

Route::get('/admin-home',['middleware'=>'auth', function () {

    return view('pages.admin.home');
}]);

Route::get('/manage_student', function () {

    return view('pages.admin.manage-students.manage_students');

});
// Route::resource('/add-access', function () {

//     return view('pages.admin.access.addaccess');

// });

Route::resource('/access', 'AccessController');

Route::post('/data','AccessController@check');
// MANAGE SUPER ADMIN ROUTES

Route::auth();

Route::get('/home', 'HomeController@index');
