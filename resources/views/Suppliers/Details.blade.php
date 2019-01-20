@extends('Shared._layout')
@section('title', 'Supplier Details')
@section('content')

    <h2>Details</h2>

    <div>

        <hr />
        <dl class="dl-horizontal">
            <dt>
               FullName
            </dt>
            <dd>
                {{ $supplier->LastName}}  {{ $supplier->FirstName}}
            </dd>
            <dt>
               EmailAddress
            </dt>
            <dd>
                {{$supplier->EmailAddress}}
            </dd>
            <dt>
               MobilePhoneNumber
            </dt>
            <dd>
                {{$supplier->MobilePhoneNumber}}
            </dd>
            <dt>
               Address
            </dt>
            <dd>
                {{$supplier->Address}}
            </dd>
            <dt>
               WorkPhoneNumber
            </dt>
            <dd>
                {{$supplier->WorkPhoneNumber}}
            </dd>
            <dt>
               HomePhoneNumber
            </dt>
            <dd>
                {{$supplier->HomePhoneNumber}}
            </dd>




        </dl>
    </div>
    <div>

        <a href="{{url('Suppliers/')}}">Back to List</a>
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