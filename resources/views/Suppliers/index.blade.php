@extends('Shared._layout')
@section('title', 'Suppliers Index')
@section('content')

    <h2>Index</h2>

    <p>
        <a href="{{url('Suppliers/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
               FullName
            </th>

            <th>
               EmailAddress
            </th>

            <th>
             MobilePhoneNumber
            </th>
            <th>
               Address
            </th>
            <th>
               WorkPhoneNumber
            </th>
            <th>
               HomePhoneNumber
            </th>

            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $item)
        <tr>
            <td>
                {{ $item->LastName}}  {{ $item->FirstName}}
            </td>

            <td>
                {{ $item->EmailAddress}}
            </td>
            <td>
                {{ $item->MobilePhoneNumber}}
            </td>
            <td>
                {{ $item->Address}}
            </td>
            <td>
                {{ $item->WorkPhoneNumber}}
            </td>
            <td>
                {{ $item->HomePhoneNumber}}
            </td>

            <td>

                <a href="{{url('Suppliers/Details/'.$item->id)}}">Details</a> |

            </td>
        </tr>
       @endforeach
        </tbody>
    </table>
@endsection