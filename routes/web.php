<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('admin/users','AdminUsersController');




























//Route::resource('movies','MovieController');
//
//
//
//Route::get('/celebs',function ()
//{
//    return view('celebs');
//});
//
//
//Route::get('/news' , function ()
//{
//    return view ('news');
//});