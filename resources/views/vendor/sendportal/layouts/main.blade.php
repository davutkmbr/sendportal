<div class="p-0 main-wrapper col min-vh-100">

    <div class="modal modal-left fade sidebar" id="sidebar-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="bg-purple-100 modal-dialog modal-dialog-scrollable mh-100" role="document">
            <div class="border-0 modal-content rounded-0 mh-100">

                <div class="p-0 modal-body bg-dark-primary">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="mt-4 text-center logo">
                        <a href="{{ route('sendportal.dashboard') }}">
                            <img src="{{ asset('/images/logo-light.png') }}" alt="Grispi Logo" width="100">
                        </a>
                    </div>

                    @include('sendportal::layouts.partials.sidebar')
                </div>
            </div>
        </div>
    </div>

    @include('sendportal::layouts.partials.header')


    <div class="main-content pl-4-half pr-4-half pb-4-half">

        @if (!in_array(request()->route()->getName(), ['login', 'register', 'password.reset']))
            @include('sendportal::layouts.partials.errors')
        @endif

        @include('sendportal::layouts.partials.success')
        @include('sendportal::layouts.partials.warning')
        @include('sendportal::layouts.partials.error')

        @yield('content')
    </div>

</div>
