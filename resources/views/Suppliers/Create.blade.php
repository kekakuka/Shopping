@extends('Shared._layout')
@section('title', 'Supplier Create')
@section('content')

    <h2>Create</h2>

    <h4>Supplier</h4>
    <hr />

    <div class="row">

        <div class="col-md-4">
            <form method="post" action="{{url('Suppliers/Create')}}">
                @csrf

                <div class="form-group">
                    <label  class="control-label">LastName</label>
                    <span style="color:red">  *</span>  <input name="LastName" value="{{ old('LastName') }}" class="form-control" />
                    <span aria-errormessage="LastName" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">FirstName</label>
                    <span style="color:red">  *</span>  <input name="FirstName" value="{{ old('FirstName') }}" class="form-control" />
                    <span aria-errormessage="FirstName" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <label  class="control-label">EmailAddress</label>
                    <span style="color:red">  *</span>  <input name="EmailAddress" value="{{ old('EmailAddress') }}" class="form-control" />
                    <span aria-errormessage="EmailAddress" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">MobilePhoneNumber</label>
                    <span style="color:red">  *</span>   <input type="number" name="MobilePhoneNumber" value="{{ old('MobilePhoneNumber') }}" class="form-control" />
                    <span aria-errormessage="MobilePhoneNumber" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">Address</label>
                    <input name="Address" value="{{ old('Address') }}" class="form-control" />
                    <span aria-errormessage="Address" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">WorkPhoneNumber</label>
                    <input name="WorkPhoneNumber" value="{{ old('WorkPhoneNumber') }}" class="form-control" />
                    <span aria-errormessage="WorkPhoneNumber" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label   class="control-label">HomePhoneNumber</label>
                    <input name="HomePhoneNumber" value="{{ old('HomePhoneNumber') }}" class="form-control" />
                    <span aria-errormessage="HomePhoneNumber" class="text-danger"></span>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <input type="submit"  class="btn btn-default" />
                </div>

            </form>
        </div>

    </div>

    <div>
        <a href="{{url('Suppliers/')}}">Back to List</a>
    </div>
@endsection