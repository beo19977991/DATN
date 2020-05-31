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
// Router::get('/sanphan/{slug}-{id}.html', 'controller');
Route::get('/home', 'HomeController@getHome')->name('home');

Route::get('/news','NewsController@getListNews');
Route::get('news/fetch_data','NewsController@fetch_data');

Route::get('/news-detail/{id}','NewsDetailController@getNewsDetail');
Route::post('postcomment','CommentController@postComment')->name('postcomment');
Route::post('post/like','NewsDetailController@likePost')->name('post.like');
// =========================================================================
Route::get('page/trainer.html', 'PageController@getListTrainer');
Route::get('page/profile/{id}', 'PageController@getProfile');

Route::get('page/create_post', 'PageController@getCreatePost');
Route::post('page/create_post', 'PageController@postCreatePost');

Route::get('page/exercise/pagination','PageController@getListExercise');
Route::get('page/exercise/pagination/fetch_data','PageController@fetch_data');

Route::get('page/create_exercise','PageController@getCreateExercise');
Route::post('page/create_exercise', 'PageController@postCreateExercise');

Route::get('page/edit_exercise/{id}','PageController@getEditExercise');
Route::post('page/edit_exercise/{id}','PageController@postEditExercise');

Route::get('page/delete_exercise/{id}','PageController@getDeleteExercise');

Route::get('video/{id}','PageController@watchVideo');

// ================================course=========================================
Route::get('page/create_course','PageController@getCreateCourse');
Route::post('page/create_course','PageController@postCreateCourse');

Route::get('page/course', 'PageController@getCourse');

Route::get('page/course/{id}','PageController@getCourseDetail');
Route::get('page/join_class/{id}','PageController@getJoinClass');

// ========================================================================
Route::get('schedule','PageController@getListSchedule');

Route::get('schedule/create_schedule','PageController@getCreateSchedule');
Route::post('schedule/create_schedule','PageController@postCreateSchedule');
// =========================================================================
Route::get('user/login','UserController@getLoginUser')->name('login');
Route::post('user/login','UserController@postLoginUser');

Route::get('user/register','UserController@getRegisterUser');
Route::post('user/register','UserController@postRegisterUser');

Route::get('user/logout','UserController@getLogoutUser');
// ===========================================================================
Route::get('admin/login','UserController@getLoginAdmin');
Route::post('admin/login','UserController@postLoginAdmin');
Route::get('admin/logout','UserController@getLogoutAdmin');
// ===========================================================================
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::get('pages',function(){
        return view('admin.index');
    });
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