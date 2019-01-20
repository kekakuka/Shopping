@extends('Shared._layout')
@section('title', 'Home Page')
@section('content')
<div class="container " style=" box-shadow: 9px 12px 0 rgba(0, 0, 0, 0.3);">
    <div class="row">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a style="border-radius:5px;   box-shadow:5px 7px 0px rgba(0, 0, 0, 0.3);" href="{{url('MemberSouvenirs')}}">
                        <img class="img-thumbnail" src="{{url('public/images/MB.jpg')}}" alt="Maori" style="width:100% ;border-radius:7px;">





                    </a>


                </div>

                <div class="item">
                    <a style="border-radius:5px;   box-shadow: 6px 7px 0 rgba(0, 0, 0, 0.3);" href="{{url('MemberSouvenirs')}}">

                        <img class="img-thumbnail img-rounded" src="{{url('public/images/CB.jpg')}}" alt="Chinese" style="width:100% ;border-radius:7px; ">



                    </a>

                </div>
                <div class="item">
                    <a style="border-radius:5px;   box-shadow: 6px 7px 0 rgba(0, 0, 0, 0.3);" href="{{url('MemberSouvenirs')}}">

                        <img class="img-thumbnail img-rounded" src="{{url('public/images/EB.jpg')}}" alt="Egpytian" style="width:100% ;border-radius:7px;  ">



                    </a>
                </div>

                <div class="item">
                    <a style="border-radius:5px  ;   box-shadow: 6px 7px 0 rgba(0, 0, 0, 0.3);"href="{{url('MemberSouvenirs')}}">

                        <img class="img-thumbnail img-rounded" src="{{url('public/images/IB.jpg')}}" alt="Indian" style="width:100% ;border-radius:7px;   ">



                    </a>

                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center col-md-12">
        <h1 class="text-center" style="font-size:67px;font-weight:800; font-family:'Curlz MT';text-shadow:2px 3px 0 rgba(0,0,0,0.15)"> Welcome to Quality Souvenir.</h1>


    </div>
</div>

<div class="container">
    <div  class="col-md-3 col-sm-6 col-xs-6">
        <div style="border-radius:8px; width:100%;margin-left:1%" class="thumbnail ">
            <a href="{{url('MemberSouvenirs/1')}}">
                <img class="img-thumbnail" style="border-radius:8px;width:98%;margin-left:1%;" src="{{url('public/images/M00.jpg')}}" alt="SouvenirImage"
                     onerror="this.onerror = null; this.src='~public/images/Default.jpg'" /><div class="carousel-caption" role="option">



                    <button class="btn btn-default  btn-l">   More Maori Gift </button>


                </div>
            </a>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-6">
        <div style="border-radius:8px; width:100%;margin-left:2%" class="thumbnail ">
            <a href="{{url('MemberSouvenirs/2')}}">
                <img class="img-thumbnail" style="border-radius:8px;width:98%;margin-left:1%;" src="{{url('public/images/C00.jpg')}}" alt="SouvenirImage"
                     onerror="this.onerror = null; this.src='~public/images/Default.jpg'" />  <div class="carousel-caption" role="option">


                    <button class="btn btn-default">
                        More Chinese Gift
                    </button>

                </div>
            </a>
        </div>
    </div>
    <div  class="col-md-3 col-sm-6 col-xs-6">
        <div style="border-radius:8px; width:100%; margin-left:3%" class="thumbnail ">
            <a href="{{url('MemberSouvenirs/3')}}">
                <img class="img-thumbnail" style="border-radius:8px;width:98%;margin-left:1%;" src="{{url('public/images/E00.jpg')}}" alt="SouvenirImage"
                     onerror="this.onerror = null; this.src='~public/images/Default.jpg'" />   <div class="carousel-caption" role="option">
                    <button class="btn btn-default">   More Egyptian Gift </button>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div style="border-radius:8px; width:100%;margin-left:4%" class="thumbnail ">
            <a HREF="{{url('MemberSouvenirs/4')}}">
                <img class="img-thumbnail" style="border-radius:8px;width:98%;margin-left:1%;" src="{{url('public/images/I00.jpg')}}" alt="SouvenirImage"
                     onerror="this.onerror = null; this.src='~public/images/Default.jpg'" /><div class="carousel-caption" role="option">
                    <button class="btn btn-default">      More Indian Gift</button>
                </div>
            </a>
        </div>
    </div>

</div>
@endsection