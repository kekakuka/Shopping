@extends('Shared._layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size: 27px"  class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div style="font-size: 24px" class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
