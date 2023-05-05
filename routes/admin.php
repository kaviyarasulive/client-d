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
Route::get('/doctors','admin\adminController@doctors')->name('doctors');
Route::get('/addDoctor','admin\adminController@addDoctor')->name('addDoctor');
Route::get('/hospitals','admin\adminController@hospitals')->name('hospitals');
Route::get('/addHospital','admin\adminController@addHospital')->name('addHospital');
Route::get('/administrationView','admin\adminController@administrationView')->name('administrationView');
Route::get('/userView','admin\adminController@userView')->name('userView');
Route::get('/patientView','admin\adminController@patientView')->name('patientView');
Route::get('/questionImport','admin\adminController@questionImport')->name('questionImport');
Route::get('question/{id}/delete','admin\adminController@delete')->name('delete');

