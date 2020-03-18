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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('trainer',function(){
    return view('trainer');
});
Route::get('schedule', function () {
    return view('schedule');
});
Route::get('about',function(){
    return view('about');
});
Route::get('classes',function(){
    return view('classes');
});
Route::get('news',function(){
    return view('news');
});
Route::get('news-detail',function(){
    return view('newsdetail');
});
Route::get('store',function(){
    return view('store');
});
Route::get('error',function(){
    return view('404');
});
Route::get('gallery',function(){
    return view('gallery');
});
Route::get('trainer-detail',function(){
    return view('trainerdetail');
});
Route::get('product-detail',function(){
    return view('productdetail');
});
Route::get('classes-detail',function(){
    return view('classesdetail');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('error',function(){
    return view('404');
});

View::composer(['*'],function($view)
{
    $user_login=Auth::user();
    $view->with('user_login',$user_login);
});


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
        
    });
    Route::group(['prefix' => 'schedule'], function () {
        
    });
    Route::group(['prefix' => 'exercise'], function () {
        
    });
    Route::group(['prefix' => 'course'], function () {
        
    });
    Route::group(['prefix' => 'device'], function () {
        
    });
});