@extends('Shared._layout')
@section('title', 'Order Create')
@section('content')



    <h3>Please Check the Order Details</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('Orders/Create')}}" method="Post">
        @csrf
        <div class="form-horizontal">
            <hr />
            <div class="row">
                <div class="col-md-6">



                    <div class="form-group">
                        <label for="Email"></label>
                        <input name="Email" VALUE="{{$user->EmailAddress}}" class="form-control" disabled />
                    </div>
                    <div class="form-group">
                        <label for="FullName"></label>
                        <input name="FullName" VALUE="{{$user->LastName}} {{$user->FirstName}}" class="form-control" />
                        <span  aria-errormessage="FullName" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="Address"></label>
                        <input name="Address" VALUE="{{$user->Address}}" class="form-control" />
                        <span aria-errormessage="Address" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="MobilePhoneNumber"></label>
                        <input type="number" name="MobilePhoneNumber" VALUE="{{$user->MobilePhoneNumber}}" class="form-control" />
                        <span aria-errormessage="MobilePhoneNumber" class="text-danger"></span>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <label style="font-size:17px">{{$totalMoney}}</label>
                </div>
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default btn-lg" {{$disabled}}>
                        Place Order <span class="glyphicon glyphicon-fast-forward"></span>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection