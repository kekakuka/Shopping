@extends('Shared._layout')
@section('title', 'Category Details')
@section('content')

    <h2>Details</h2>

    <div>

        <hr />
        <dl class="dl-horizontal">
            <dt>
               FullName
            </dt>
            <dd>
                {{ $category->Name}}
            </dd>

            <dt>
               Description
            </dt>
            <dd>
                {{ $category->Description}}
            </dd>





        </dl>
    </div>
    <div>

        <a href="{{url('Categories/')}}">Back to List</a>
    </div>
    @if ($souvenirs->count()!= 0)
        <dt>
            Souvenirs
        </dt>
        <dd>
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Image
                    </th>
                    <th>
                        Souvenir Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($souvenirs as $souvenir)


                    <tr>
                        <td>
                            <img class="img-thumbnail" style="width: 60px; height:60px;" src='{{url($souvenir->PathOfFile)}}' alt="Souvenir Image" onerror="this.onerror = null; this.src = '{{url('public/images/Default.jpg')}}'">
                        </td>
                        <td>
                           {{$souvenir->Name}}
                        </td>

                        <td>
                           {{$souvenir->Price}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </dd>
   @endif
@endsection