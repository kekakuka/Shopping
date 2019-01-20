<?php

namespace App\Http\Controllers;

use App\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home');
    }
    public function index()
    {


        return view('home.index');
    }

    public function Contact()
    {

        return view('home.Contact');
    }

    public function About()
    {


       $souvenirs=DB::table('souvenirs')->get();
$line=1000;
        return view('home.About',compact('souvenirs','line'));
    }


}
