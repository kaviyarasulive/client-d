<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::get('/question','admin\adminController@question_form')->name('test');
Route::post('/store','admin\adminController@store')->name('store');
