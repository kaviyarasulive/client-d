<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\question;
use App\doctor;
use App\hospital;
use App\Patient;
use App\User;
use App\Administration;
use App\Imports\questionImport;
use DB;

class adminController extends Controller
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

    function question_form(){
        $Data = $this->getData(); 
        return view('admin.Test_question_form',$Data);
    }

    function store(Request $request){
        $data = $request->all('Insert_question','Option_A','Option_B','Option_C');
        $question= question::create($data);
        return back();
    }    
    function doctors(){
        $Data = $this->getData(); 
        return view('admin.doctors',$Data);
    }


    function hospitals(){
        $Data = $this->getData(); 
        return view('admin.hospitals',$Data);
    }
    
   

   
    function administrationView(){
        $Data = $this->getData(); 
        return view('admin.administration',$Data);


    }

    function userView(){
        $Data = $this->getData(); 
        return view('admin.user',$Data);
    }

    function patientView(){
        $Data = $this->getData(); 
        return view('admin.patient',$Data);
    }


function delete($id){
    try {
        question::findOrfail($id)->delete();
        return redirect('admin/Test_question_form')->with('success',['Client','Deleted Successfully!']);
    }catch (Exception \Illuminate\Database\QueryException $e){
        return back()->with('danger','Something went wrong!');
    }
}
    
}


   