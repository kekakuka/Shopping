@extends('Shared._layout')
@section('title', 'About')
@section('content')
    <h2>About Quality Souvenir</h2>
    <hr />
    <div class="container"><div class="col-md-12">
            <div style=" left:6%;font-family:'Berlin Sans FB'" class="col-xs-5 col-md-5">
                <h2></h2>
                <img class="img-rounded" style="width:100%;margin-left:-50px" src="{{URL::asset('public/images/Title1.jpg')}}" alt="Quality Souvenir">
            </div>
            <div class="col-xs-6 col-md-6">
                <h1 style="font-family:'Footlight MT';font-size:230%;"> Welcome to the Quality Souvenir Ltd.</h1>
                <h3 style="font-family:'Footlight MT';font-size:170%;">
                    Quality Souvenir is a New Zealand based company established in 2018. The Logo is a combination of Chinese Red-Crowned bird and New Zealand Kiwi bird.
                    <br /> Quality Souvenir sells Maori souvenirs and Chinese souvenirs, as well as some souvenirs from other ancient civilizations.
                    <br />Let your enjoyable shopping trip start with clicking your favourite souvenirs below!
                </h3>
            </div>

        </div></div>
    <br />
    <div class="row">
        <div class="container">



            <input style="display:none" id="IamNumbers" type="number" value="{{ $souvenirs->count()}}" />

            <table class="col-md-offset-1 col-md-10 table table-condensed">

                <tr style="display:none" id="1000">

                    @foreach ($souvenirs as $souvenir)
                        <?php
                        $line++?>

                        <td>
                            <a href="{{url('MemberSouvenirs/Details/'.$souvenir->id)}}">
                                <img class="img-circle img-thumbnail" style="    box-shadow: 3px 4px 0px rgba(0, 0, 0, 0.3); width:200px;height:auto" src="{{url($souvenir->PathOfFile)}}" alt="SouvenirImage"
                                     onerror="this.onerror = null; this.src='{{url('public/images/Default.jpg')}}'" />
                            </a>
                        </td>
                        @if ($line % 4 == 0)
                        </tr><tr style="display:none" id="{{$line}}">
                    @endif
                    @endforeach
                </tr>

            </table>
            }
        </div>
    </div>
    <script>

        var move = window.setInterval(change, 3500);
        var line = 1000;
        var iamNumbers = document.getElementById("IamNumbers");
        var iamNumbers2 = document.getElementById("IamNumbers2");
        var  iamNumber=  parseInt(iamNumbers.value) - parseInt(iamNumbers.value) % 4
        function change() {

            line += 4;
            var lineLLast;
            var lineNext;
            var lineLast = document.getElementById(line - 4 + "");
            var lineNow = document.getElementById(line + "");
            if (line>1004) {
                lineLLast = document.getElementById(line - 8 + "");
                lineLLast.style.display = "none";
            }
            else {
                var lineX = document.getElementById(1000 + iamNumber + "");
                lineX.style.display = "none";
            }
            if (line < 1000 + iamNumber) {
                lineNext = document.getElementById(line + 4 + "");
                lineNext.style.display = "block";
                lineNext.style.opacity = 0.4;
            }
            lineNow.style.display = "block";
            lineNow.style.opacity = 0.7;
            lineLast.style.opacity = 1;
            lineLast.style.display = "block";
            if (line >= 1000 + iamNumber) {
                lineLast.style.display = "none";
                line = 1000;



            }

        }
        change();

    </script>
@endsection