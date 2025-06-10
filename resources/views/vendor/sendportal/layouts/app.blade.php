@extends('sendportal::layouts.base')

@section('htmlBody')
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar sidebar-static bg-dark-primary min-vh-100 d-none d-xl-block">
                <div class="py-3 text-center logo">
                    <a href="{{ route('sendportal.dashboard') }}">
                        <img src="{{ asset('/images/logo-light.png') }}" alt="Grispi Logo" width="75">
                    </a>
                </div>
                <div class="mt-5">
                    @include('sendportal::layouts.partials.sidebar')
                </div>
            </div>

            @include('sendportal::layouts.main')
        </div>
    </div>

    <style>
        .bg-dark-primary {
            background: #001628;
        }

        .sidebar-static .logo {
            background: #632d91;
        }

        .sidebar li.nav-item a.nav-link {
            border-left-color: #001628;
        }
    </style>
@endsection
