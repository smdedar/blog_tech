<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','adminController@admin')->middleware(['auth', 'admin']);

Route::post('/postblog','postblogController@post');
Route::get('/blog', 'postblogController@singleblogView');

Route::get('/','postblogController@blogView');
// Route::group(['domain' => 'blog.localhost:8000'], function () {
//     Route::get('/', function () {
//         return view('blog');
//     });
// });

Route::domain('blog.localhost::8000')->group(function () {
    Route::get('/blog','adminController@admin');

});
