<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('administration')->user();

    //dd($users);

    return view('administration.home');
})->name('home');

