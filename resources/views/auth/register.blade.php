@extends('Shared._layout')
@section('title', 'Register')
@section('content')

    <h2>Register</h2>
    <div class="row">
        @if ($errors->any())
            <div class="row alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{url('register/CreatePost')}}"  method="post">
            @csrf
        <h4>Create a new account.</h4>

        <div class="col-md-5">
            <div class="form-group">
                <label for="LastName">LastName</label>
                <span style="color:red">  *</span> <input name="LastName" value="{{ old('LastName') }}" class="form-control" />
                <span aria-errormessage="LastName" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="FirstName">FirstName</label>
                <span style="color:red">  *</span>  <input name="FirstName" value="{{ old('FirstName') }}" class="form-control" />
                <span aria-errormessage="FirstName" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <span style="color:red">  *</span>  <input name="EmailAddress" value="{{ old('EmailAddress') }}" class="form-control" />
                <span aria-errormessage="Email" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <span style="color:red">  *</span>    <input type="password" name="Password" class="form-control" />
                <span aria-errormessage="Password" class="text-danger"></span>
            </div>
            {{--<div class="form-group row">--}}
                {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                {{--<div class="col-md-6">--}}
                    {{--<input  type="password" class="form-control" name="Password_confirmation" required>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="ConfirmPassword">ConfirmPassword</label>
                <span style="color:red">  *</span> <input id="Password-confirm" type="password" name="Password_confirmation" class="form-control" />
                <span aria-errormessage="ConfirmPassword" class="text-danger"></span>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="Address">Address</label>
                <span style="color:red">  *</span> <input name="Address" value="{{ old('Address') }}" class="form-control" />
                <span aria-errormessage="Address" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="MobilePhoneNumber">MobilePhoneNumber</label>
                <span style="color:red">  *</span> <input  type="number"   name="MobilePhoneNumber" value="{{ old('MobilePhoneNumber') }}" class="form-control" />
                <span aria-errormessage="MobilePhoneNumber" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="HomePhoneNumber">HomePhoneNumber</label>
                <input  type="number"  name="HomePhoneNumber" value="{{ old('HomePhoneNumber') }}" class="form-control" />
                <span aria-errormessage="HomePhoneNumber" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="WorkPhoneNumber">WorkPhoneNumber</label>
                <input  type="number"  name="WorkPhoneNumber" value="{{ old('WorkPhoneNumber') }}" class="form-control" />
                <span aria-errormessage="WorkPhoneNumber" class="text-danger"></span>
            </div>
            <label>The field of <span style="color:red">  * </span> are required information</label><br />
            <button type="submit" class="btn btn-info">Register as a new user</button>
        </div>

        </form>

    </div>


@endsection
