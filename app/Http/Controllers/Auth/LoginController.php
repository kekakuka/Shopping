<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function CheckLogin(Request $request){
        if (Session::has('user')){
          return url($request->url());

        }
        Session::put('oldUrl',$request->url());

        return  route('login') ;
    }

    public function LogOut()
    {
        Session::forget('user');
        return redirect('/');
    }
    public function LoginPost(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'EmailAddress' => 'required|email',
            'Password' => 'required|min:6',

        ]);


        if ($validator->fails()) {
            return redirect( route('login') )
                ->withErrors($validator)
                ->withInput();
        }

//       if (Auth::attempt(['EmailAddress'=>$request->input('EmailAddress'),'Password'=>$request->input('Password')],$request->post('remember'))){
//           return redirect('/');
//       }
        $user=DB::table('users')->where('EmailAddress', '=', $request->input('EmailAddress'))->first();
       if ($user==null||$user->Password!=$request->input('Password')){
           $loginMessage='Please Enter the right Email and Password';

           return view('auth.login',compact('loginMessage'));
       }

        Log::info('System logs that the login of the user: '. $user->EmailAddress);
        if ($user->Enabled===0){
            $loginMessage='Your account is disabled. Please contact the Administrator!';

            return view('auth.login',compact('loginMessage'));
        }
        if ($user->EmailConfirmed===0){
            $loginMessage='Please confirm your email first!';
            return view('auth.login',compact('loginMessage'));
        }

        Session::put('user',$user);

       if (Session::has('oldUrl')){
              $url=redirect()->to(Session::get('oldUrl'))->getTargetUrl();
              Session::forget('oldUrl');

          return redirect()->to($url);
       }



       return redirect('/');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
}
