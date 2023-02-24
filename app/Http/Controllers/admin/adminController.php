<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\question;

class adminController extends Controller
{
    function question_form(){
        return view('admin.Test_question_form');
    }
    
    function store(Request $request){
    $data = $request->all('Insert_question','Option_A','Option_B','Option_C');
    $question= question::create($data);
    return "Question saved";

}

    
}
