@extends('Shared._layout')
@section('title', 'Shopping')
@section('content')


    <h1 class="col-md-offset-2" style="font-size:57px;font-weight:600; font-family:'Curlz MT';
    text-shadow:2px 3px 0 rgba(0,0,0,0.15)"> Welcome to Quality Souvenir.</h1>
    <hr/>
    <div class="container">
        <div class="col-md-3 thumbnail">
            <ul name="id" class="nav nav-pills nav-stacked">

                @if ($data['selectedCateId']=='0')
                    <?php $data['selectedRow'] = 'active';?>
                @endif
                <li class={{$data['selectedRow']}}><a href="{{url('MemberSouvenirs/0')}}">All Categories</a></li>

                @foreach ($data['categories'] as $category)


                    @if ($category->id == $data['selectedCateId'])
                        <?php $data['selectedRow'] = 'active';?>
                    @else
                        <?php $data['selectedRow'] = '';?>
                    @endif
                    <li class={{$data['selectedRow']}}>
                        <a href="{{url('MemberSouvenirs/'.$category->id)}}">
                            {{$category->Name}}
                        </a>
                    </li>
                @endforeach


            </ul>
        </div>
        <div class="col-md-9">
            <form action="{{url('MemberSouvenirs/'.$data['selectedCateId'].'/1')}}" method="get">
                <div class="form-actions no-color">
                    <p>
                        <input placeholder="Search Name" class="small" type="text" name="searchName"
                               value="{{$data['searchName']}}"/>

                        <input style="margin-left:10%" placeholder="Search Min Price" class="small" type="number"
                               name="searchMinPrice" value="{{$data['searchMinPrice']}}"/> - <input
                                placeholder="Search Max Price" class="small" type="number" name="searchMaxPrice"
                                value="{{$data['searchMaxPrice']}}"/>
                        <input style="margin-left:5%" type="submit" value="Search" class="btn btn-default"/>

                    </p>
                </div>
            </form>
            {{--<a href="{{url('MemberSouvenirs/'.$data['selectedCateId'].'/'.$data['pageIndex'])}}">Order by Price<span class="@ViewData[sign]"></span> </a>  --}}
            <a href="{{url('MemberSouvenirs/')}}">Back to Full List</a>

            <table style="width:90%" class="table table-condensed">
                <tr>

                    @foreach ($data['souvenirs']->NewItems as $souvenir)



                        @if ($data['count']++% 3 == 0)

                </tr>
                <tr>

                    @endif
                    <td>
                        <div style="width:95%;border-radius:8px;max-width:220px;min-width:170px;"
                             class="thumbnail text-center">


                            <a href="{{url('MemberSouvenirs/Details/'.$souvenir->id)}}">

                                <img class="img-rounded" style="width:99%;height:207px;"
                                     src="{{url($souvenir->PathOfFile)}}" alt="SouvenirImage"
                                     onerror="this.onerror = null; this.src='{{url('/public/images/Default.jpg')}}'"/>


                                <span>
    {{$souvenir->Name}}
    </span>
                            </a> <br/>
                            <div class="caption row">
                                <div style="margin-top:3%" class="col-md-7">
    <span style="font-size: 14px" class="money">
    Pirce:{{$souvenir->Price}}
    </span><br/>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-default"
                                       href="{{url('MemberSouvenirs/AddToCart/'.$souvenir->id)}}">
    <span class="glyphicon glyphicon-shopping-cart">
    </span>
                                        Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                    @endforeach
                </tr>

            </table>
        </div>
        <hr/>

    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-1 col-md-offset-3">
                <a href="{{url('MemberSouvenirs/'.$data['selectedCateId'].'/'.($data['pageIndex']-1).'?searchName='.$data['searchName'].'&searchMinPrice='.$data['searchMinPrice'].'&searchMaxPrice='.$data['searchMaxPrice'])}}"
                   class="btn btn-default {{$data['prevDisabled']}}">Previous</a>
            </div>
            <div class="col-md-6 btn-group">

                @for ($i = 1; $i <= $data['souvenirs']->TotalPages; $i++)
                    <?PHP     $data['pageDisabled'] = $data['souvenirs']->PageIndex == $i ? "disabled" : "";

                    ?>
                    <a href="{{url('MemberSouvenirs/'.$data['selectedCateId'].'/'.$i.'?searchName='.$data['searchName'].'&searchMinPrice='.$data['searchMinPrice'].'&searchMaxPrice='.$data['searchMaxPrice'])}}"
                       class="btn btn-default  {{$data['pageDisabled']}}">{{$i}}</a>
                @endfor

            </div>
            <div class="col-md-1">
                <a href="{{url('MemberSouvenirs/'.$data['selectedCateId'].'/'.($data['pageIndex']+1).'?searchName='.$data['searchName'].'&searchMinPrice='.$data['searchMinPrice'].'&searchMaxPrice='.$data['searchMaxPrice'])}}"
                   class="btn btn-default {{$data['nextDisabled']}}">Next</a>
            </div>
        </div>
    </div>
@endsection

