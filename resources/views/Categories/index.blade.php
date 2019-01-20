@extends('Shared._layout')
@section('title', 'Categories Index')
@section('content')

    <h2>Index</h2>

    <p>
        <a href="{{url('Categories/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
               Name
            </th>


            <th>
              Description
            </th>


            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $item)
        <tr>
            <td>
                {{ $item->Name}}
            </td>

            <td>
                {{ $item->Description}}
            </td>
            <td>

                <a href="{{url('Categories/Details/'.$item->id)}}">Details</a> |

            </td>
        </tr>
       @endforeach
        </tbody>
    </table>
@endsection