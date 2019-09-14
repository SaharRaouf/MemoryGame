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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about','HomeController@about');
Route::get('contact','HomeController@contact');
Route::get('memoryGame','MemoryGameController@index');
Route::get('videos', 'VideoController@show');
Route::get('project', 'ProjectController@index');
Route::resource('inquiry','InquiryController');
/* Quizzes */
Route::get('train', 'QuizController@index');
Route::get('train/{baseTopicName}', 'QuizController@train');
Route::get('train/{baseTopicName}/{topicName}/{questionNumber}', 'QuizController@show');
Route::post('train/{baseTopicName}/{topicName}/{questionNumber}', 'QuizController@proposeSolution');
/* Authentication route


    Route::resource('questions', 'QuestionsController');
    Route::resource('topics', 'TopicsController');
    Route::resource('base-topics', 'BaseTopicsController');
    Route::resource('users', 'UsersController');
    Route::get('email-list', 'EmailListController@index');*/
Route::group(array('prefix' => 'admin'), function()
{
    Route::resource('questions', 'QuestionsController');
    Route::resource('topics', 'TopicsController');
    Route::resource('base-topics', 'BaseTopicsController');
    Route::resource('users', 'UsersController');
    Route::get('email-list', 'EmailListController@index');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);