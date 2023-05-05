<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.home');
})->name('home');


Route::get('/test','user\userController@test')->name('test');
Route::get('/doctors','user\userController@doctors')->name('doctors');
Route::get('/hospital','user\userController@hospital')->name('hospital');
Route::get('/profile','user\userController@profile')->name('profile');
Route::get('/ViewReport','user\userController@ViewReport')->name('ViewReport');
Route::get('/download','user\userController@downReport')->name('downReport');
Route::get('/result','user\userController@result')->name('result');

Route::get('/Oncologist','user\userController@Oncologist')->name('Oncologist');
Route::post('/Oncologist','user\userController@test2')->name('test2');


Route::get('/Opthalmology','user\userController@Opthalmology')->name('Opthalmology');
Route::post('/Opthalmology','user\userController@test1')->name('test1');

Route::get('/Rheumatology','user\userController@Rheumatology')->name('Rheumatology');
Route::post('/Rheumatology','user\userController@test4')->name('test4');

Route::get('/Pulmonology','user\userController@Pulmonology')->name('Pulmonology');
Route::post('/Pulmonology','user\userController@test3')->name('test3');



Route::get('/Neurologisty','user\userController@Neurologisty')->name('Neurologisty');
Route::post('/Neurologisty','user\userController@test5')->name('test5');

	
