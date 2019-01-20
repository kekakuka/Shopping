<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class VerifyController extends Controller
{
   public function verify($Token){
      $users= User::all();
      foreach ($users as $user){
          if($user->Token===$Token)
          {
              DB::table('users')
                  ->where('id', $user->id)
                  ->update(['EmailConfirmed' => 1]);
              Session::put('user',$user);
              break;
          }
      }
       return view('home.index');
   }
}
