@extends('Shared._layout')
@section('title', 'Order Details')
@section('content')

    <h3> Manage your account</h3>
    <h4>Change your account settings</h4>
    <hr/>
    <div class="row">
        <div class="col-md-3">
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{route('Profile')}}">Profile</a></li>
                <li class="active"><a href="#">My Details</a></li>
                <li><a href="{{route('ChangePassword')}}">Password</a></li>
            </ul>
        </div>


        <div class="col-md-6">
            <h4>My Details</h4>

            <dl class="dl-horizontal">
                <dt>
                  Full Name
                </dt>
                <dd>
                  {{$user->LastName}} {{$user->FirstName}}
                </dd>

                <dt>
                   Email
                </dt>
                <dd>
                    {{$user->EmailAddress}}
                </dd>
                <dt>
                    Mobile Phone Number
                </dt>
                <dd>
                    {{$user->MobilePhoneNumber}}
                </dd>
                <dt>
                    Address
                </dt>
                <dd>
                    {{$user->Address}}
                </dd>

            </dl>
            <h4> Order  Details:</h4>
            <table class="table">

                <thead>
                <tr>
                    <th>

                        Order Number
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Mobile Number
                    </th>
                    <th>
                        Order Date
                    </th>

                    <th>
                        Order Status
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user->orders as $order)

                    <tr>
                        <td>
                           {{$order->id}}
                        </td>
                        <td>
                            {{$order->FullName}}
                        </td>
                        <td>
                            {{$order->Address}}
                        </td>
                        <td>
                            {{$order->MobilePhoneNumber}}
                        </td>
                        <td>
                            {{$order->OrderDate}}
                        </td>
                        <td>


                            {{$order->OrderStatus}}

                        </td>
                        <td>

                            <a href="{{url('Orders/Purchased/'.$user->id)}}">Details</a>

                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection