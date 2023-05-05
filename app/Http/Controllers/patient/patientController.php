<?php

namespace App\Http\Controllers\patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\question;
use App\doctor;
use App\hospital;
use App\patient;
use App\User;
use App\Administration;

class patientController extends Controller
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
        $Data = $this->getData(); 
        return view('patient.profile',$Data);
    }

    function doctors(){
        $Data = $this->getData(); 
        return view('patient.doctor',$Data);
    }
    
    function hospital(){
        $Data = $this->getData(); 
        return view('patient.hospital',$Data);
    }
    
    function viewReport(){
        $Data = $this->getData(); 
        return view('patient.viewReport',$Data);
    }
    
    function medition(){
        $Data = $this->getData(); 
        return view('patient.medition',$Data);
    }
    
    function downReport(){
        $Data = $this->getData(); 
        return view('patient.downReport',$Data);
    }
    
    function allDoctorList(){
        $Data = $this->getData(); 
        return view('patient.allDoctorList',$Data);
    }
    
    function allHospitalList(){
        $Data = $this->getData(); 
        return view('patient.allHospitalList',$Data);
    }
}
