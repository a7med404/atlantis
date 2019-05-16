<?php
use GuzzleHttp\Middleware;

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




Route::get('/blog', function () {
    return view('site/post');
});

Route::get('/', function () {
    return view('site/home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/blogs', 'BlogController');
    Route::resource('/posts', 'PostController');
    Route::resource('/users', 'BlogController');
   
    Route::get('/logout', function(){
        auth()->logout();
        session()->forget('*');
        Session::flash('flash_massage_type');
        return redirect()->route('login')->withFlashMassage('Logout Susscefully');
    })->name('logout');
    
});
Route::get('/admin', function () {
    return view('app');
})->middleware('auth');


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/post/{title}/{id}', 'PostController@show')->name('post');
