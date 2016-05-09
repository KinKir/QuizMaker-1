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






// Db Ile Elaqesi Olmuyannar //


// Users Hissesi




Route::group(['middleware'=>'admin'],function(){
  Route::group(['middleware' =>'auth:admin'],function(){
      Route::get('/admin','AdminController@index');
      Route::resource('admin/quizmanager','AdminQuizController');
      Route::resource('admin/categorymaneger','AdminCategoryController');
      Route::get('admin/addcategory','AdminController@addcategory');


      Route::get('admin/addquiz','AdminController@addquiz');

      Route::resource('admin/answermanager','AdminAnswersController');
      Route::resource('admin/addanswer','AdminController@addanswer');

      // Db Ile Elaqesi Olmuyannar //
      Route::get('admin/publicprofile','AdminController@publicprofile');
      Route::get('admin/accountsetting','AdminController@editaccount');
      Route::get('admin/messages','AdminController@messages');
  });

  Route::get('/admin/login','AdminController@login');
  Route::post('/admin/login','AdminController@postLogin');
  Route::get('/admin/logout','AdminController@logout');

});
Route::group(['middleware'=>'web'],function(){
    Route::get('/','UserMainController@index');
    Route::group(['middleware' =>'auth:web'],function(){






  Route::get('user/quizresult','UserController@quizresult');
  Route::get('user/editaccount','UserController@account');
  Route::get('user/messages','UserController@messages');

Route::get('/home','HomeController@index');
Route::get('/show/user','HomeController@show');
});
Route::auth();
Route::get('user/takequiz','UserChooseQuizController@index');
Route::get('/quiz/{id}/questions','UserAnswerQuizController@index');
Route::get('/quiz','UserAnswerQuizController@listing');
Route::get('/question/{id}','UserAnswerQuizController@question');
Route::get('/category/{id}','UserAnswerQuizController@category');
Route::resource('user/category','UserCategoryController');
});
