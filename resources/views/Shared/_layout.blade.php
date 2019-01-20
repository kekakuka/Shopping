<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')- Quantity Souvenir</title>


        <link rel="stylesheet" href="{{url('public/lib/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('public/css/site.css')}}" type="text/css"/>
       <link rel="icon" type="image/png" href="{{url('public/images/Logo.png')}}" sizes="16x16">
</head>
<body>
<div style="font-size:15px" class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div style="padding-top:5px;margin-left:10px" class="col-xs-3 col-lg-1 col-md-1 dropdown">
        @if(Session::has('user')&&Session::get('user')->Role==='Admin')
            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Administrator<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{url('/Categories')}}">Categorys Management</a></li>
                <li><a href="{{url('/Suppliers')}}">Suppliers Management</a></li>
                <li><a href="{{url('/Orders')}}">Orders Management</a></li>
                <li><a href="{{url('/Souvenirs')}}">Souvenirs Management</a></li>
                <li><a href="{{url('/Members')}}">Members Management</a></li>
            </ul>
        @endif
    </div>

    <div style="margin-left:5%" class="col-xs-5 col-lg-2 col-md-3 navbar-header nav-title">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <a id="LayoutLogo"  href="{{url('/')}}"><img class="img-rounded" style="width:110px;" src="{{URL::asset('public/images/Title1.jpg')}}" alt="Quality Souvenir"></a>


    </div>

    <div class="col-xs-12 col-md-9 col-lg-9    collapse navbar-collapse">

        <div class="col-xs-6 col-md-3 col-lg-3  navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">

                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/About')}}">About</a></li>
                <li><a href="{{url('/Contact')}}">Contact</a></li>
                <li><a href="{{url('/MemberSouvenirs')}}"><span id="SouvenirLogo" class="glyphicon glyphicon-fire">Souvenirs</span></a></li>

            </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
            @if(Session::has('user'))
                <li> <a   href="{{url('Manage')}}" title="Manage">Hi {{Session::get('user')->EmailAddress}}</a></li>
                <li>
                    <form action="{{route('Logout')}}" method="post" id="logoutForm" class="navbar-right">
                        @csrf
                        <button type="submit" class="btn btn-link navbar-btn navbar-link">Log out</button>
                    </form>
                </li>
                @else
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a  href="{{ route('login') }}">Log in</a></li>
            @endif
            <li>
                <div style="padding-left:50px" class="dropdown" id="shoppingCartMenu">
                    <a onclick="check2()" style=" margin-top:6px;margin-left:8px; border-radius:6px; " class="btn btn-default well-sm dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                        @if (Session::has('cart')&&(Session::get('cart')->cartItems!=null))
                            <span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart<span style="color:white;background-color:rgba(117, 119, 129, 0.83);" class="badge">{{Session::get('cart')->Quantity()}}</span>
                    </a>
                    <div id="displayMenu" style="width:480px;height:auto;display:compact;" class="dropdown-menu dropdown-menu-left">
                            <div style="border-radius:6px;" class="cart-container">
                                <h4 style="color:darkred;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</h4>
                                <table style="width:478px;" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Souvenir </th>
                                        <th> Category </th>
                                        <th> Quantity </th>
                                        <th> Price </th>
                                        <th> SubTotal </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (Session::get('cart')->cartItems as $cartItem)
                                        <tr>
                                            <td>
                                                <a {{url('MemberSouvenirs/Details/'.$cartItem->souvenir->id)}}>
                                                    NO.{{$cartItem->souvenir->id}} {{$cartItem->souvenir->Name}}
                                                </a>
                                            </td>
                                            <td>{{$cartItem->category}}</td>
                                            <td>
                                                {{$cartItem->count}} <a href="{{url('MemberSouvenirs/RemoveFromCart/'.$cartItem->souvenir->id)}}">
                                                    <span onclick="localStorage.setItem('display','inline')" class="glyphicon glyphicon-remove-circle"></span>
                                                </a>
                                            </td>
                                            <td>
                                                {{$cartItem->price}}
                                            </td>
                                            <td>
                                                {{ '$'.number_format($cartItem->price*$cartItem->count,2)}}
                                            </td>
                                        </tr>
                                       @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                Sub Total:
                                            </td>
                                            <td>
                                                    {{ '$'.number_format(Session::get('cart')->SubTotal(),2)}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                Gst:
                                            </td>
                                            <td>
                                                    {{ '$'.number_format(Session::get('cart')->Gst(),2)}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                Total:
                                            </td>
                                            <td id="grandTotal">
                                           {{ '$'.number_format(Session::get('cart')->Total(),2)}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-offset-3">
                                        <a style="margin-bottom:4px; border-radius:8px;" class="btn-danger btn well-sm" href="{{route('ClearCart')}}">
                                            Clear Cart <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a style="margin-bottom:4px; border-radius:8px;" class="btn-warning btn well-sm" href="{{url('Orders/Create')}}">
                                            Checkout <span class="glyphicon glyphicon-credit-card"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            @else
                            <span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart<span style="color:white;background-color:rgba(117, 119, 129, 0.83);" class="badge">0</span>
                            </a>
                            <div id="displayMenu" style="width:480px;height:auto;display:compact;" class="dropdown-menu dropdown-menu-left">
                        <div style="border-radius:6px" class="row cart-container">
                            <h4 style="color:darkred;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</h4>
                            <div style="width:90%" class="text-center">
                                <span class="glyphicon glyphicon-search">Nothing in shopping cart!!</span>
                            </div>
                        </div>
@endif

                    </div>
                </div>
            </li>
        </ul>

    </div>



</div>

<partial name="_CookieConsentPartial" />

<div class="container body-content">

    @yield('content')
    <div style="height:100px" class="row"> </div>

    <hr />

    <div class="container">

        <footer class="footer">

            <div class="row">
                <div class="col-md-3 col-xs-6">

                    <p><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span>  Home</a></p>

                    <p><a href="{{url('/About')}}"><span class="glyphicon glyphicon-search"> </span>  About</a></p>




                    <p><a href="{{url('/Contact')}}"><span class="glyphicon glyphicon-earphone"> </span> Contact</a></p>

                    <p><a href="{{url('/MemberSouvenirs')}}"><span class="glyphicon glyphicon-gift"> </span> Souvenirs</a></p>


                </div>
                <div class="col-md-3 col-xs-6">

                    <div>
                        <p> <span style="font-size:20px" class="glyphicon glyphicon-user"> </span>  Lei Li</p>
                    </div>
                    <div>
                        <p>  <span style="font-size:20px" class="glyphicon glyphicon-info-sign"> </span>   StudentID: 1494024</p>
                    </div>
                    <div>
                        <p>  <span style="font-size:20px" class="glyphicon glyphicon-heart-empty"> </span> ISCG7420 WAD</p>



                    </div>
                    <div>
                        <p>  <span style="font-size:20px" class="glyphicon glyphicon-thumbs-up"> </span> Lecturer:Xiaosong Li</p>



                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div>

                        <p><span style="font-size:20px" class="glyphicon glyphicon  glyphicon-globe"> </span> Building 183, 139 Carrington Road Mt Albert, Auckland</p>
                    </div>
                    <div>

                        <p><span style="font-size:20px" class="glyphicon glyphicon-phone-alt"></span> 0221111111</p>
                    </div>
                    <div>

                        <p><span style="font-size:20px" class="glyphicon glyphicon-envelope"></span> support@QualitySouvenir.co.nz</p>
                    </div>
                    <div>
                        <p>&copy; 2018 - Quantity Souvenir</p>
                    </div>
                </div>

            </div>

        </footer>
    </div>
</div>

    <script src="{{url('public/lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{url('public/lib/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{url('public/js/site.js')}}"></script>


{{--@yield('Scripts')--}}
<script>





</script>
</body>
</html>