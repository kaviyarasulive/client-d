<?php

namespace App\Http\Controllers\user;

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

use App\User;
use App\Administration;

class userController extends Controller
{
    function getData(){
        $Data['question'] = question::all();
        $Data['doctor'] = doctor::all();
        $Data['hospital'] = hospital::all();
        $Data['user'] = User::all();
        $Data['patient'] = Patient::all();
        $Data['administration'] = Administration::all();
        $Data['Neurologisty'] = Neurologisty::all();
        $Data['oncologist'] = oncologist::all();
        $Data['Pulmonology'] = Pulmonology::all();
        $Data['Rheumatology'] = Rheumatology::all();
        $Data['opthalmology'] = opthalmology::all();

        return $Data;
    }

    function test(){
        $Data = $this->getData(); 
        return view('user.test', $Data);
    }

    function doctors(){
        $Data = $this->getData(); 
        return view('user.doctors', $Data);
    }
    function hospital(){
        $Data = $this->getData(); 
        return view('user.hospital', $Data);
    }
    function profile(){
        $Data = $this->getData(); 
        return view('user.profile', $Data);
    }
    
    function ViewReport(){
        $Data = $this->getData(); 
        return view('user.viewReport', $Data);
    }

    function test1(Request $request){
        $data = $request->all( 
          
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty', 
            );
            $opthalmology = opthalmology::create($data);

            return view('user.Opthalmology');
    }

    function test2(Request $request){
        $data = $request->all( 
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            );
            $oncologist = oncologist::create($data);

            return view('user.oncologist');
    }

    function test3(Request $request){
        $data = $request->all( 
          
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            );
            $Pulmonology = Pulmonology::create($data);
  
            return view('user.Pulmonology');
    }

    function test4(Request $request){
        $data = $request->all( 
          
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            );
            $Rheumatology = Rheumatology::create($data);

            return view('user.Rheumatology');
    }

    function test5(Request $request){
        $data = $request->all( 
          
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen',
            'twenty',
            );
            $Neurologisty = Neurologisty::create($data);

            return view('user.Neurologisty');
    }



    function downReport(){
        $Data = $this->getData(); 
        return view('user.downReport', $Data);
    }
    function result(){
        $Data = $this->getData(); 
        return view('user.result', $Data);
    }

    function Oncologist (){
        $Data = $this->getData(); 
        return view('user.Oncologist', $Data);
    }

    function Opthalmology (){
        $Data = $this->getData(); 
        return view('user.Opthalmology', $Data);
    }

    function Pulmonology(){
        $Data = $this->getData(); 
        return view('user.Pulmonology', $Data);
    }

    function Rheumatology(){
        $Data = $this->getData(); 
        return view('user.Rheumatology', $Data);

    } 

    function Neurologisty(){
        $Data = $this->getData(); 
        return view('user.Neurologisty', $Data);

    }

    
}
