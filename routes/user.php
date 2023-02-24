<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.home');
})->name('home');


Route::get('/test','user\userController@test')->name('test');
// Route::get('/billing','Client\ClientController@billing')->name('billing');

