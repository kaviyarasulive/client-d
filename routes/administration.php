<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('administration')->user();

    //dd($users);

    return view('administration.home');
})->name('home');



    Route::get('/profile', 'Administration\AdministrationController@Profile')->name('Profile');
    Route::get('/calender', 'Administration\AdministrationController@calender')->name('calender');
    Route::get('/weeklyReaport', 'Administration\AdministrationController@weeklyReaport')->name('weeklyReaport');
    Route::get('/monthlyReport', 'Administration\AdministrationController@monthlyReport')->name('weeklyReaport');
    Route::get('/booking', 'Administration\AdministrationController@booking')->name('booking');
    Route::get('/view', 'Administration\AdministrationController@view')->name('view');
    Route::post('/logout', 'AdministrationAuth\LoginController@logout')->name('logout');
  
    Route::get('/register', 'AdministrationAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdministrationAuth\RegisterController@register');
  
    Route::post('/password/email', 'AdministrationAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdministrationAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdministrationAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdministrationAuth\ResetPasswordController@showResetForm');
  