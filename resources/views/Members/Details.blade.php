@extends('Shared._layout')
@section('title', 'Member Details')
@section('content')

    <h2>Details</h2>

    <div>
        <h4>Member</h4>
        <hr />
        <dl class="dl-horizontal">
            <dt>
               Full Name
            </dt>
            <dd>
               {{$member->LastName}}  {{$member->FirstName}}
            </dd>
            <dt>
                Email
            </dt>
            <dd>
                {{$member->EmailAddress}}
            </dd>
            <dt>
                Address
            </dt>
            <dd>
                {{$member->Address}}
            </dd>
            <dt>

            </dt>
            <dd>
                {{$member->MobilePhoneNumber}}
            </dd>
            <dt>
                EmailConfirmed
            </dt>
            <dd>
                @if($member->EmailConfirmed==1)


                    <input type="checkbox" disabled checked>
                @else
                    <input type="checkbox" disabled>
                @endif
            </dd>

            <dt>
                WorkPhoneNumber
            </dt>
            <dd>
                {{$member->WorkPhoneNumber}}
            </dd>
            <dt>
                HomePhoneNumber
            </dt>
            <dd>
                {{$member->HomePhoneNumber}}
            </dd>
            <dt>
                Enabled
            </dt>
            <dd>
                @if($member->Enabled==1)


                    <input type="checkbox" disabled checked>
                @else
                    <input type="checkbox" disabled>
                @endif
            </dd>
        </dl>
    </div>
    <div>


        <a href="{{url('Members')}}">Back to List</a>
    </div>
@endsection