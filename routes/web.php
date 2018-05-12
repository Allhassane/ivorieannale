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

// front root
Route::get('/exercises', 'HomeController@ExercisesIndex')->name('front.exercises');
Route::get('/examinations', 'HomeController@ExaminationsIndex')->name('front.examinations');
Route::get('/category', 'HomeController@ByCategoryIndex')->name('front.by.category');
//Route::get('/levels', 'HomeController@ByLevelsIndex')->name('front.by.levels');
//Route::get('/schools', 'HomeController@BySchoolsIndex')->name('front.by.schools');



// download
Route::get('/download/exercises/{id}/{slug}', 'HomeController@downloadExercises')->name('download.exercises');
Route::get('/download/examinations/{id}/{slug}', 'HomeController@downloadExamination')->name('download.examinations');
Route::get('/download/corrected_exercises/{id}/{slug}', 'HomeController@downloadCorrectedExercises')->name('download.corrected_exercises');
Route::get('/download/corrected_examinations/{id}/{slug}', 'HomeController@downloadCorrectedExaminations')->name('download.corrected_examinations');

// blog
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{slug}', 'HomeController@blogShow')->name('blog.show');

// contact

Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::post('/contacts/send', 'HomeController@contactSend')->name('contacts.send');