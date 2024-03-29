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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('blog', function() {
//     return view('blog', ['name' => 'Carlos', 'surname' => 'Fernandez']);
// });

// Route::get('/posts/{id}', function ($id) {
//     return App\Post::find($id);
// });



Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
	Route::resource('posts', 'PostController');
});

Auth::routes();