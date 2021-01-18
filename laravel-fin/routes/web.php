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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', function(){
	return 'you are admin';
})->middleware(['auth', 'auth.admin']);






Route::post('/destroycomment', 'delcommentController@destroy')->name('destroycomment');
Route::get('/delcomment', 'delcommentController@index')->middleware(['auth', 'auth.admin'])->name('delcomment');


// ->middleware(['auth','auth.admin'])


Route::post('/destroy', 'delProductController@destroy')->name('destroy');
Route::get('/delproduct', 'delProductController@index')->middleware(['auth', 'auth.admin'])->name('delproduct');


Route::get('/addcomment', function () {
    return view('Front-end/addComment');
})->middleware('auth');
Route::post('/insertcomment',"commentsController@store");




Route::get('/addproduct', function () {
    return view('Front-end/addProduct');
})->middleware(['auth', 'auth.admin']);
Route::post('/insert',"addProductController@store");




Route::get('/', 'indexController@index')->name('index');

Route::get('/{product}', 'indexController@show')->name('show');

// asdaskdaskhdkashkdhasjhjdhaskdhka
