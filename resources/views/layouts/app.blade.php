<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ app(App\Settings\SystemSettings::class)->clinic_name }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ !empty(app(App\Settings\SystemSettings::class)->favicon) ? asset('storage/system/' . app(App\Settings\SystemSettings::class)->favicon) : asset('favicon.png') }}">
    <style>
        .table tbody tr.success td {
            background-color: #dff0d8;
        }

        .table tbody tr.error td {
            background-color: #f2dede;
        }

        .table tbody tr.info td {
            background-color: #d9edf7;
        }

        .table tbody tr.warning td {
            background-color: lightgoldenrodyellow;
        }
    </style>
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/alpine.min.js')}}"></script>
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed control-sidebar-slide-open">
    <div class="wrapper">
        @include('partials.header')
        @include('partials.sidebar')
        @yield('content')
    </div>
    @livewireScripts
    @livewire('livewire-ui-modal')
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script>
        @if (session()->has('success'))
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session()->get('success') }}',
                showConfirmButton: true,
                timer: 2500
            })
        @elseif (session()->has('error'))
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session()->get('error') }}',
                showConfirmButton: true,
                timer: 5500
            })
        @endif
    </script>
</body>

</html>
