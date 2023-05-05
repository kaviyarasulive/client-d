<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('patient')->user();

    //dd($users);

    return view('patient.home');
})->name('home');

Route::get('/profile','patient\patientController@profile')->name('profile');
Route::get('/doctor','patient\patientController@doctors')->name('doctors');
Route::get('/hospital','patient\patientController@hospital')->name('hospital');
Route::get('/medition','patient\patientController@medition')->name('medition');
Route::get('/viewReport','patient\patientController@viewReport')->name('viewReport');
Route::get('/downReport','patient\patientController@downReport')->name('downReport');
Route::get('/allDoctorList','patient\patientController@allDoctorList')->name('allDoctorList');
Route::get('/allHospitalList','patient\patientController@allHospitalList')->name('allHospitalList');
