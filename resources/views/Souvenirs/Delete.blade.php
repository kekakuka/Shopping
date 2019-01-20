@extends('Shared._layout')
@section('title', 'Souvenir Delete')
@section('content')

    <h2>Delete</h2>
    <p class="text-danger">@if(isset($errorDelete)){{$errorDelete}}@endif</p>
    <h3>Are you sure you want to delete this?</h3>
    <div>

        <h4>Souvenir</h4>
        <hr />
        <dl class="dl-horizontal">
            <dt>
              Name
            </dt>
            <dd>
               {{$souvenir->Name}}
            </dd>

            <dt>
              Description
            </dt>
            <dd>
                {{$souvenir->Description}}
            </dd>
            <dt>
              Price
            </dt>
            <dd>
                {{$souvenir->Price}}
            </dd>
            <dt>
             Category
            </dt>
            <dd>
                {{$souvenir->category->Name}}
            </dd>
            <dt>
               Supplier
            </dt>
            <dd>
                {{$souvenir->supplier->LastName}}    {{$souvenir->supplier->FirstName}}
            </dd>
            <dt>
                Image
            </dt>
            <dd>



                <img style="width: 25%;border-radius:6px;  height: auto;" src="{{url($souvenir->PathOfFile)}}" alt="Souvenir Image" onerror="this.onerror = null; this.src = '{{url('public/images/Default.jpg')}}'">
            </dd>
        </dl>

        <form method="post" action="{{url('Souvenirs/Delete/'.$souvenir->id)}}">
            @csrf
            <input type="submit" value="Delete" class="btn btn-default" /> |
            <a href="{{url('Souvenirs/')}}">Back to List</a>
        </form>
    </div>

@endsection