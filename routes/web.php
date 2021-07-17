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

use  App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



//Route:: get ('posts/{post}',function ($slug) {
//
//    $post =  file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html ") ;
//
//        return view('post',[
//            'post' => $post
//    ]);
//});

Route::group(['middleware' => ['web']], function () {
    Route::get('/posts/display', 'PostController@index');
    Route::get('/post/create', 'PostController@create');
    Route::post('/post/create', 'PostController@store')->name('postStore');
    Route::get('/post/delete/{id}', 'PostController@destroy');
});
Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

