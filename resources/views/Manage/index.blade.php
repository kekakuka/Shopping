@extends('Shared._layout')
@section('title', 'Profile')
@section('content')
    <h3> Manage your account</h3>
    <h4>Change your account settings</h4>
<hr/>
    <div class="row">
        <div class="col-md-3">
            <br>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Profile</a></li>
        <li><a href="{{route('MyDetails')}}">My Details</a></li>
        <li><a href="{{route('ChangePassword')}}">Password</a></li>
    </ul>
    </div>


        <div class="col-md-6">
            <h4>Profile</h4>
            @if(Session::has('success'))<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Your profile has been updated
            </div>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('ChangeProfile')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="EmailAddress">Email</label>
                    <input name="EmailAddress" value="{{Session::get('user')->EmailAddress}}" class="form-control" readonly />
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input name="LastName" value="{{Session::get('user')->LastName}}" class="form-control" />
                    <span aria-errormessage="LastName" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input name="FirstName" value="{{Session::get('user')->FirstName}}" class="form-control" />
                    <span aria-errormessage="FirstName" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input name="Address" value="{{Session::get('user')->Address}}" class="form-control" />
                    <span aria-errormessage="Address" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="MobilePhoneNumber">Mobile Phone Number</label>
                    <input name="MobilePhoneNumber" value="{{Session::get('user')->MobilePhoneNumber}}" type="number" class="form-control" />
                    <span aria-errormessage="MobilePhoneNumber" class="text-danger"></span>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>

        </div>
    </div>
@endsection