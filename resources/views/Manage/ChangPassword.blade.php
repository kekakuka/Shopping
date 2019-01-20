@extends('Shared._layout')
@section('title', 'Order Details')
@section('content')

    <h3> Manage your account</h3>
    <h4>Change your account settings</h4>
    <hr/>
    <div class="row">
        <div class="col-md-3">
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{route('Profile')}}">Profile</a></li>
                <li><a href="{{route('MyDetails')}}">My Details</a></li>
                <li class="active"><a href="#">Password</a></li>
            </ul>
        </div>


        <div class="col-md-8">
            <h4>Change Password</h4>
            @if(Session::has('PassSuccess'))<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Your Password has been updated
            </div>
                @else <br>
            @endif
            @if(Session::has('passwordErrors'))<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
               {{Session::get('passwordErrors')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('PasswordPost')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="OldPassword">Current Password</label>
                            <input type="password" name="OldPassword" class="form-control" />
                            <span  aria-errormessage="OldPassword" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="NewPassword">New Password</label>
                            <input type="password" name="NewPassword" class="form-control" />
                            <span aria-errormessage="NewPassword" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="ConfirmPassword">Confirm Password</label>
                            <input type="password" name="ConfirmPassword" class="form-control" />
                            <span aria-errormessage="ConfirmPassword" class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-default">Update password</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection