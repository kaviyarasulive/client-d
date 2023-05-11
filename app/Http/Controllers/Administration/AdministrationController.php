<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\question;
use App\doctor;
use App\hospital;
use App\Patient;
use App\Neurologisty;
use App\oncologist;
use App\Pulmonology;
use App\Rheumatology;
use App\opthalmology;
use Response;
use App\User;
use App\Administration;
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
        $Data = $this->getData();
        return view('administration.weeklyReport', $Data);
    }

    function monthlyReport(){
        $Data = $this->getData();
        return view('administration.monthlyReport', $Data);
    }

    function booking(){
        return view('administration.booking');
    }

    function view(){
        return view('administration.view');
    }

    function submitReport(Request $request, $id) {

        $request->validate([
            'report'=>'required',
          ]);
          
        $destinationPath = 'documents';
        $myimage = $request->report->getClientOriginalName();
        $request->report->move(public_path($destinationPath), $myimage);
    
        $patient = Patient::find($id);
        $patient->report = $myimage;
        $patient->save();
          
        return redirect()->back();
        
    }

    function download($id) {
        $patient = Patient::find($id);
        $report = $patient->report;
        return Response::make(file_get_contents('documents/'.$report), 200, [
            'content-type'=>'application/pdf',
        ]);

    }
}
