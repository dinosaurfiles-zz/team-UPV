<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'homeController@home');
Route::get('/registerpatient', 'patientController@register');
Route::get('/registermedicalpersonnel', 'medical_personnelController@register');
Route::get('/loginpatient', 'patientController@login');
Route::get('/loginmedicalpersonnel', 'medical_personnelController@login');
Route::get('/testloc', 'medical_personnelController@dashboard');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
