@extends('sendportal::layouts.base')

@section('htmlBody')
    <div class="container-fluid">
        <div class="row">

            <div class="sidebar bg-purple-100 min-vh-100 d-none d-xl-block">

                <div class="logo text-center py-3" style="background: #2c2652;">
                    <a href="{{ route('sendportal.dashboard') }}">
                        <img src="{{ asset('/images/logo.png') }}" alt="Grispi Logo" width="75">
                    </a>
                </div>

                <div class="mt-5">
                    @include('sendportal::layouts.partials.sidebar')
                </div>
            </div>

            @include('sendportal::layouts.main')
        </div>
    </div>
@endsection
