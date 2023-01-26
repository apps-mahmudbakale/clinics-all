<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">r

    <title>{{ config('app.name', app(App\Settings\SystemSettings::class)->clinic_name) }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    {{-- <link rel="shortcut icon" type="image/x-icon"
        href="{{ !empty(app(App\Settings\StoreSettings::class)->favicon) ? asset('storage/settings/' . app(App\Settings\StoreSettings::class)->favicon) : asset('favicon.png') }}"> --}}
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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partials.header')
        @include('partials.sidebar')
        @yield('content')
    </div>
    @livewireScripts
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
