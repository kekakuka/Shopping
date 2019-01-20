<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController
{
    public  static function IsAdmin(){
        if (!Session::has('user')){
           abort(404,'Sorry, the page you are looking for could not be found.');
        }
        if (Session::get('user')->Role==='Member')
        {   abort(404,'Sorry, the page you are looking for could not be found.');
        }

    }

    public  static function IsUser(){

        if (!Session::has('user')){
            abort(404,'Sorry, the page you are looking for could not be found.');
        }
    }
}
