@extends('Shared._layout')
@section('title', 'Category Create')
@section('content')

    <h2>Create</h2>

    <h4>Category</h4>
    <hr />

    <div class="row">

        <div class="col-md-4">
            <form method="post" action="{{url('Categories/Create')}}">
                @csrf

                <div class="form-group">
                    <label  class="control-label">Name</label>
                    <span style="color:red">  *</span>  <input name="Name" value="{{ old('Name') }}" class="form-control" />
                    <span aria-errormessage="Name" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <label  class="control-label">Description</label>
                    <input name="Description" value="{{ old('Description') }}" class="form-control" />
                    <span aria-errormessage="Description" class="text-danger"></span>
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
        <a href="{{url('Categories/')}}">Back to List</a>
    </div>
@endsection