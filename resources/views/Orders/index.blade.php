@extends('Shared._layout')
@section('title', 'Orders Index')
@section('content')

    <h2>Index</h2>


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
                Email
            </th>
            <th>
              Address
            </th>
            <th>
               MobilePhoneNumber
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
        @foreach ($orders as $order)
        <tr>
            <td>
               {{$order->id}}
            </td>
            <td>
                {{$order->FullName}}
            </td>
            <td>
                {{$order->user->EmailAddress}}
            </td>
            <td>
                {{$order->Address}}
            </td>
            <td>
                {{$order->MobilePhoneNumber}}
            </td>
            <td>
                {{$order->create_at}}
            </td>
            <td>
                @if ($order->OrderStatus === 'Waiting')

                    <a href="{{url('Orders/Ship/'.$order->id)}}">Waiting for delivery</a>

                    @else

                   {{ $order->OrderStatus}}

                    @endif
            </td>
            <td>

                <a href="{{url('Orders/Details/'.$order->id)}}">Details</a> |

            </td>
        </tr>
       @endforeach
        </tbody>
    </table>
@endsection