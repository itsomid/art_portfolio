<?php

//Website

Route::get('/','website\HomeController@index')->name('home');
Route::get('/profile/{id}','website\HomeController@getProfile')->name('profile');
Route::get('/image/{id}','website\HomeController@getImage')->name('image/single');
Route::post('/login','website\HomeController@login')->name('login');
Auth::routes();

Route::get('logout', function()
{
    Auth::logout();
    return redirect('/login');
})->name('logout');

//Profile


Route::group(['prefix'=>'panel'],function(){
    Route::get('/','panel\DashboardController@index')->name('panel/dashboard');
    Route::get('user','panel\UserController@index')->name('panel/user/show');
    Route::post('user/{id}','panel\UserController@save')->name('panel/user/edit');



    Route::get('images','panel\ImageController@index')->name('panel/image/get');
    Route::post('image/add','panel\ImageController@add')->name('panel/image/add');
    Route::get('image/edit/{id}','panel\ImageController@edit')->name('panel/image/edit/get');
    Route::post('image/edit/{id}','panel\ImageController@edit')->name('panel/image/edit/save');
    Route::get('image/delete/{id}','panel\ImageController@delete')->name('panel/image/delete');

});
