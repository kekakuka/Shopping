<?php

namespace App\Http\Controllers\Auth;

use App\Notifications\VerifyEmail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'LastName' => 'required|max:50',
            'FirstName' => 'required|max:50',
            'EmailAddress' => 'required|string|email|max:255|unique:users',
            'Password' => 'required|string|min:6|confirmed',
            'MobilePhoneNumber' => 'required|max:30',
            'HomePhoneNumber' => 'max:30',
            'WorkPhoneNumber' => 'max:30',
            'Address' => 'required|max:100'
        ]);
    }

    public function CreatePost(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'LastName' => 'required|max:50',
            'FirstName' => 'required|max:50',
            'EmailAddress' => 'required|string|email|max:255|unique:users',
            'Password' => 'required|string|min:6|confirmed',
            'MobilePhoneNumber' => 'required|max:30',
            'HomePhoneNumber' => 'max:30',
            'WorkPhoneNumber' => 'max:30',
            'Address' => 'required|max:100'
        ]);


        if ($validator->fails()) {
            return redirect( route('register') )
                ->withErrors($validator)
                ->withInput();
        }
        $user = new User([
            'EmailAddress' => $_POST['EmailAddress'], 'Address' => $_POST['Address'],'Password' => $_POST['Password']
            , 'MobilePhoneNumber' => $_POST['MobilePhoneNumber'], 'LastName' => $_POST['LastName'], 'FirstName' => $_POST['FirstName'],
            'HomePhoneNumber' => $_POST['HomePhoneNumber'], 'EmailConfirmed'=>1,'WorkPhoneNumber' => $_POST['WorkPhoneNumber'],'Token'=>str_random(25)
        ]);
        $user->save();

        $user->sendEmail();
       // $user->nofify(new VerifyEmail($user));
        return view('auth.verify');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
       // dd($request);
      //  array $data;
        return User::create([
            'LastName' => $data['LastName'],
            'FirstName' => $data['FirstName'],
            'EmailAddress' => $data['EmailAddress'],
            'Password' => Hash::make($data['Password']),
            'MobilePhoneNumber' => $data['MobilePhoneNumber'],
            'HomePhoneNumber' => $data['HomePhoneNumber'],
            'WorkPhoneNumber' => $data['WorkPhoneNumber'],
            'Address' => $data['Address']
        ]);
    }
}
