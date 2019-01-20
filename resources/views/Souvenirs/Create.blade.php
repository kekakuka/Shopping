@extends('Shared._layout')
@section('title', 'Souvenir Create')
@section('content')

    <h2>Create</h2>

    <h4>Souvenir</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('Souvenirs/Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input name="Name" value="{{ old('Name') }}"  class="form-control" />
                    <span aria-errormessage="Name" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">Description</label>
                    <input name="Description" value="{{ old('Description') }}" class="form-control" />
                    <span aria-errormessage="Description" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label  class="control-label">Price</label>
                    <input name="Price"  value="{{ old('Price') }}" class="form-control" />
                    <span aria-errormessage="Price" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <label  class="control-label">Category</label>
                    <select name="category_id"  class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->Name }}</option>
                        @endforeach
                    </select>
                    <span aria-errormessage="category_id" class="text-danger" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Supplier</label>
                    <select name="supplier_id" class="form-control">
                        <option value="">-- Select Supplier --</option>
                        @foreach ($suppliers as $supplier)
                            <option  value="{{ $supplier->id }}">{{ $supplier->LastName }} {{ $supplier->FirstName }}</option>
                        @endforeach
                    </select>
                    <span aria-errormessage="supplier_id" class="text-danger" />
                </div>
                <input type="file" name="_files" id="_files" />
                <br>
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
                    <input type="submit" value="Create" class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="{{url('Souvenirs/')}}">Back to List</a>
    </div>
@endsection