@extends('Shared._layout')
@section('title', 'Souvenir Details')
@section('content')

    <h2>Details</h2>

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
                {{$souvenir->categoryName}}
            </dd>
            <dt>
             Supplier
            </dt>
            <dd>
                {{$souvenir->LastName}}  {{$souvenir->FirstName}}
            </dd>
            <dt>
                Image
            </dt>
            <dd>
                <img style="width: 25%;border-radius:6px;  height: auto;" src="{{url($souvenir->PathOfFile)}}" alt="Souvenir Image" onerror="this.onerror = null; this.src = '{{url('public/images/Default.jpg')}}'">
            </dd>
        </dl>
    </div>
    <div>

        <a href="{{url('Souvenirs/')}}">Back to List</a>
    </div>
@endsection