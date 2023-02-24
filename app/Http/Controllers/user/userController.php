<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    function test(){

        return view('user.test');
    }
}
