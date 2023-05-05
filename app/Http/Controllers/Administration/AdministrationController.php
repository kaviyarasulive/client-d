<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use administration;
class AdministrationController extends Controller
{
    function getData(){
        $Data['question'] = question::all();
        $Data['doctor'] = doctor::all();
        $Data['hospital'] = hospital::all();
        $Data['user'] = User::all();
        $Data['patient'] = Patient::all();
        $Data['administration'] = Administration::all();

        return $Data;
    }


    function profile(){
        return view('administration.profile');
    }

    function calender(){
        return view('administration.calender');
    }

    function weeklyReaport(){
        return view('administration.weeklyReport');
    }

    function monthlyReport(){
        return view('administration.monthlyReport');
    }

    function booking(){
        return view('administration.booking');
    }

    function view(){
        return view('administration.view');
    }

   

}
