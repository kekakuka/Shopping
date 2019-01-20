@extends('Shared._layout')
@section('title', 'Contact')
@section('content')
    <h2>Contact</h2>
    <div class="container">
        <div style=" left:6%;font-family:'Berlin Sans FB'" class="col-md-3"><h2>  </h2> </div><div class="col-md-6">
            <img class="center-block img-rounded" style="width:60%;margin-top:-30px" src="{{URL::asset('public/images/Title1.jpg')}}" alt="Quality Souvenir">
        </div>
    </div><hr /> <div class="container">
        <div class="col-md-6">
            <dl class="dl-horizontal">
                <dt> Address:</dt>
                <dd>
                    Building 183
                    139 Carrington Road
                    Mt Albert, Auckland
                </dd>
                <dt>  Phone:</dt>
                <dd> 0211111111</dd>
                <dt> Support Email:</dt>
                <dd> support@QualitySouvenir.co.nz</dd>


            </dl>
        </div>
        <div class="col-md-6">
            <dl class="dl-horizontal">
                <dt> Open:</dt>
                <dd>
                    Monday – Friday
                </dd>
                <dt> Time:</dt>
                <dd> 9.30am to 4pm</dd>
                <dt> Marketting Email:</dt>
                <dd> Marketing@qualitySouvenir.com</dd>


            </dl>
        </div>
    </div>
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div style=" border:double;border-radius:15px; height:400px" class="jumbotron" id="map"></div>
        </div>
    </div>
    <address class="center-block">

        <strong>Support:</strong> <a href="mailto:Support@qualitySouvenir.com">Support@qualitySouvenir.com</a><br />
        <strong>Marketing:</strong> <a href="mailto:Marketing@qualitySouvenir.com">Marketing@qualitySouvenir.com</a>
    </address>
    <script>

        function initMap() {
            var myLatLng = { lat: -36.8808, lng: 174.7078 };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Quality Souvenir'
            });
        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_zok3TctZQOdZzoR1lqs9a1q_mT0DN5c&callback=initMap">
    </script>
@endsection