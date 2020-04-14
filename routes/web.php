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
use Illuminate\Support\Facades\Auth;

View::composer(['*'],function($view)
{
    $user_login=Auth::user();
    $view->with('user_login',$user_login);
});

Route::get('/home', 'HomeController@getHome')->name('home');
Route::get('/news','NewsController@getListNews');
Route::get('/news-detail/{id}','NewsDetailController@getNewsDetail');
Route::post('postcomment','CommentController@postComment')->name('postcomment');
Route::post('like','NewsDetailController@likePost')->name('like');
Route::post('unlike','NewsDetailController@unlikePost')->name('unlike');

Route::get('admin/login','UserController@getLoginAdmin');
Route::post('admin/login','UserController@postLoginAdmin');
Route::get('admin/logout','UserController@getLogoutAdmin');
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('list','UserController@getList');

        Route::get('edit/{id}','UserController@getEdit');
        Route::post('edit/{id}','UserController@postEdit');

        Route::get('add','UserController@getAdd');
        Route::post('add','UserController@postAdd');

        Route::get('delete/{id}','UserController@getDelete');
    });
    Route::group(['prefix' => 'post'], function () {
        Route::get('list','PostController@getList');

        Route::get('add','PostController@getAdd');
        Route::post('add','PostController@postAdd');

        Route::get('delete/{id}','PostController@getDelete');

    });
    Route::group(['prefix' => 'schedule'], function () {
        Route::get('list','ScheduleController@getList');

        Route::get('add','ScheduleController@getAdd');
        Route::post('add','ScheduleController@postAdd');

        Route::get('delete/{id}','ScheduleController@getDelete');
    });
    Route::group(['prefix' => 'exercise'], function () {
        Route::get('list','ExerciseController@getList');

        Route::get('edit/{id}','ExerciseController@getEdit');
        Route::post('edit/{id}','ExerciseController@postEdit');

        Route::get('add','ExerciseController@getAdd');
        Route::post('add','ExerciseController@postAdd');

        Route::get('delete/{id}','ExerciseController@getDelete');
    });
    Route::group(['prefix' => 'course'], function () {
        Route::get('list','CourseController@getList');

        Route::get('edit/{id}','CourseController@getEdit');
        Route::post('edit/{id}','CourseController@postEdit');

        Route::get('add','CourseController@getAdd');
        Route::post('add','CourseController@postAdd');

        Route::get('delete/{id}','CourseController@getDelete');
    });
    Route::group(['prefix' => 'type-exercise'], function () {
        Route::get('list','TypeExerciseController@getList');

        Route::get('edit/{id}','TypeExerciseController@getEdit');
        Route::post('edit/{id}','TypeExerciseController@postEdit');

        Route::get('add','TypeExerciseController@getAdd');
        Route::post('add','TypeExerciseController@postAdd');

        Route::get('delete/{id}','TypeExerciseController@getDelete');
    });
    Route::group(['prefix' => 'type-product'], function () {
        Route::get('list','TypeProductController@getList');

        Route::get('edit/{id}','TypeProductController@getEdit');
        Route::post('edit/{id}','TypeProductController@postEdit');

        Route::get('add','TypeProductController@getAdd');
        Route::post('add','TypeProductController@postAdd');

        Route::get('delete/{id}','TypeProductController@getDelete');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('list','ProductController@getList');

        Route::get('edit/{id}','ProductController@getEdit');
        Route::post('edit/{id}','ProductController@postEdit');

        Route::get('add','ProductController@getAdd');
        Route::post('add','ProductController@postAdd');

        Route::get('delete/{id}','ProductController@getDelete');
    });
    Route::group(['prefix' => 'type-schedule'], function () {
        Route::get('list','TypeScheduleController@getList');

        Route::get('edit/{id}','TypeScheduleController@getEdit');
        Route::post('edit/{id}','TypeScheduleController@postEdit');

        Route::get('add','TypeScheduleController@getAdd');
        Route::post('add','TypeScheduleController@postAdd');

        Route::get('delete/{id}','TypeScheduleController@getDelete');
    });
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('post/{idPost}','PostController@getBlock');
    });
});