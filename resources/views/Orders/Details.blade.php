@extends('Shared._layout')
@section('title', 'Order Details')
@section('content')

    <h2>Order details</h2>
    <div>

        <dl class="dl-horizontal">
            <dt> Order ID </dt>

            <dd>{{$order->id}}</dd>

            <dt> Order Full Name</dt>

            <dd>{{$order->FullName}}</dd>
            <dt>Email</dt>

            <dd>{{$order->user->EmailAddress}}</dd>

            <dt>Order Address</dt>

            <dd>{{$order->Address}}</dd>

            <dt>
                Order Phone Number
            </dt>
            <dd>
                {{$order->MobilePhoneNumber}}
            </dd>
            <dt>
                Total
            </dt>
            <dd>
                {{number_format($order->Total,2) }}
            </dd>
            <dt>
                Order Date
            </dt>
            <dd>
                {{$order->create_at}}
            </dd>
            <dt>
               Order Status
            </dt>
            <dd>
             {{$order->OrderStatus}}
            </dd>
            <dt>
                Order Details
            </dt>
            <dd>
                <table class="table">
                    <tr>
                        <th>Souvenir</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>SubTotal</th>
                    </tr>
                    <br>
                    @foreach ($order->order_souvenirs as $order_souvenir)

                        <tr>
                            <td>
                                {{$order_souvenir->souvenir->Name}}
                            </td>
                            <td>
                                {{$order_souvenir->Quantity}}
                            </td>
                            <td>
                                {{$order_souvenir->UnitPrice}}
                            </td>
                            <td>
                                {{number_format($order_souvenir->UnitPrice*$order_souvenir->Quantity,2) }}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <label>SubTotal:</label>
                        </td>
                        <td>
                            ${{number_format($order->SubTotal,2) }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <label>GST:</label>
                        </td>
                        <td>
                            ${{number_format($order->GST,2) }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <label>GrandTotal:</label>
                        </td>
                        <td>
                            ${{number_format($order->Total,2) }}
                        </td>
                    </tr>
                </table>
            </dd>
        </dl>
    </div> <div>
        <a HREF="{{url('Orders')}}">Back to List</a>
    </div>


@endsection