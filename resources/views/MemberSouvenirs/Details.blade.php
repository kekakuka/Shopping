@extends('Shared._layout')
@section('title', 'Souvenir Details')
@section('content')

    <h2>Details</h2>

    <div>
        <h4>Souvenir</h4>
        <hr />

        <div class="row">
            <div class="col-md-4">

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
            </dd></dl>
            </div>
            <div class="col-md-offset-1 col-md-4">



                <img  style="width:70%;border-radius:15px; height:auto;"  src="{{url($souvenir->PathOfFile)}}" alt="Souvenir Image" onerror="this.onerror = null; this.src = '{{url('public/images/Default.jpg')}}'">

          </div>
        </div>
        <div class="col-md-2">

            <a href="{{url('MemberSouvenirs/')}}">Back to List</a>
        </div>

        <div  class="col-md-3">
            <a class="btn btn-default"  href="{{url('MemberSouvenirs/AddToCart/'.$souvenir->id)}}" >
        <span class="glyphicon glyphicon-shopping-cart">
        </span>
                Add To Cart
            </a>
        </div>
    </div>

@endsection