<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Monolog\Handler\IFTTTHandler;
use Session;
use App\Http\Controllers\AuthController;

class ManageController extends Controller
{
    public function index()
    {
        AuthController::IsUser();
        return view('Manage.index');
    }

    public function ChangeProfile(Request $request)
    {
        AuthController::IsUser();
        $validator = Validator::make($request->all(), [
            'LastName' => 'required|max:50',
            'FirstName' => 'required|max:50',
            'MobilePhoneNumber' => 'required|max:30',
            'Address' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            return redirect(route('Profile'))
                ->withErrors($validator);
        }


        DB::table('users')
            ->where('id', Session::get('user')->id)
            ->update(['Address' => $_POST['Address'], 'MobilePhoneNumber' => $_POST['MobilePhoneNumber'], 'LastName' => $_POST['LastName'], 'FirstName' => $_POST['FirstName']]);
        $user = User::find(Session::get('user')->id);
        $success = 'OK gao ding le';
        Session::put('user', $user);
        return redirect(route('Profile'))->with('success', $success);

    }

    public function Details()
    {
        AuthController::IsUser();
        $user = User::find(Session::get('user')->id);
        return view('Manage.Details', compact('user'));
    }


    public function ChangePassword()
    {
        AuthController::IsUser();
        return view('Manage.ChangPassword');
    }

    public function PasswordPost(Request $request)
    {
        AuthController::IsUser();
        $Cuser = User::find(Session::get('user')->id);
        if ($_POST['OldPassword']!==$Cuser->Password)
        {
            $passwordErrors='Wrong Password!';
            return redirect(route('ChangePassword'))->with('passwordErrors', $passwordErrors);
        }
        if (strlen($_POST['NewPassword'])<6){
            $passwordErrors='The new Password should be more than 6 charactor!';
            return redirect(route('ChangePassword'))->with('passwordErrors', $passwordErrors);
        }
        if ($_POST['NewPassword']!==$_POST['ConfirmPassword'])
        {
            $passwordErrors='New Password must be the same as Confirm Password!';
            return redirect(route('ChangePassword'))->with('passwordErrors', $passwordErrors);
        }
        DB::table('users')
            ->where('id', Session::get('user')->id)
            ->update(['Password' => $_POST['NewPassword']]);
        $user = User::find(Session::get('user')->id);
        $PassSuccess = 'OK gao ding le';
        Session::put('user', $user);
        return redirect(route('ChangePassword'))->with('PassSuccess', $PassSuccess);

    }
}
