<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;

class MemberController extends Controller
{
    public function index()
    {

        AuthController::IsAdmin();
        $members = DB::table('users')->where('role', 'member')->get();

        return view('Members.index', compact('members'));
    }

    public function Details($id)
    {
        AuthController::IsAdmin();
        $member = User::find($id);

        return view('Members.Details', compact('member'));
    }


    public function Enabled($id)
    {
        AuthController::IsAdmin();
        $member = User::find($id);
        if ($member->Enabled == 0) {
            DB::table('users')
                ->where('id', $id)
                ->update(['Enabled' => 1]);
        } else {
            DB::table('users')
                ->where('id', $id)
                ->update(['Enabled' => 0]);
        }

        return redirect()->route('memberIndex');
    }
}
