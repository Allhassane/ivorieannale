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

Route::group(['prefix' => 'admin'], function () {
    // dump($namespacePrefix);
    Voyager::routes();
});
//Route::post('admin/exercises', 'ExerciseController@store')->name('voyager.exercises.store');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::post('/password/reset', 'ConfigController@sendCode')->name('password.mobile');
Route::get('/confirm/code', 'ConfigController@checkedCode')->name('password.mobile.code');
Route::post('/confirm/code', 'ConfigController@checkedCodeConfirm')->name('password.mobile.code.comfirm');
Route::post('/confirm/code/new-password', 'ConfigController@newPassword')->name('password.mobile.request');



Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', function(){
    return redirect('/');
});

// verifier le numero via ajax
Route::get('/check-my-number-with-ajax', 'ConfigController@checkedNumber')->name('checked.number');

// welcome route
Route::get('/register/welcome', 'Auth\RegisterController@welcome')->name('welcome');
Route::post('/register/confirm', 'ConfigController@confirmCode')->name('confirm.code');
Route::get('/register/verified', 'Auth\RegisterController@verified')->name('verified');