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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'QuizController@index');
    Route::get('/quizzes/{slug}', 'QuizController@create');
    Route::post('/quizzes/create', 'QuizController@store');
});

// Auth module routes
Auth::routes();

// Admin namespace routes.
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {

    Route::get('/admin', 'AdminController@index');
    Route::resource('/admin/quizzes', 'QuizController');
    Route::resource('/admin/questions', 'QuestionController');
    Route::resource('/admin/answers', 'AnswerController');
    Route::resource('/admin/submissions', 'SubmissionController');
    Route::resource('/admin/users', 'UserController');

});
