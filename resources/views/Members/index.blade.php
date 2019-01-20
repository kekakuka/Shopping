@extends('Shared._layout')
@section('title', 'Members Index')
@section('content')

    <h2>Index</h2>

    <table class="table">
        <thead>
        <tr>
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
               EmailConfirmed
            </th>
            <th>
                Enabled
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($members as $member)

            <tr>

                <td>
                  {{$member->LastName}} {{$member->FirstName}}
                </td>
                <td>
                    {{$member->EmailAddress}}
                </td>
                <td>
                    {{$member->Address}}
                </td>

                <td>
                    {{$member->MobilePhoneNumber}}
                </td>
                <td>

                    @if($member->EmailConfirmed==1)


                    <input type="checkbox" disabled checked>
                        @else
                    <input type="checkbox" disabled>
                    @endif
                </td>
                <td>
                    @if($member->Enabled==1)


                        <input type="checkbox" disabled checked>
                    @else
                        <input type="checkbox" disabled>
                    @endif
                </td>
                <td>
                    @if ($member->Enabled == true)

                        <a href="{{url('Members/Enabled/'.$member->id)}}">Disable</a>

                        @else

                        <a href="{{url('Members/Enabled/'.$member->id)}}">Enable</a>

@endif
                </td>
                <td>

                    <a href="{{url('Members/Details/'.$member->id)}}">Details</a> |

                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection