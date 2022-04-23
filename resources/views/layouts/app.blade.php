<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('components.style')
    @stack('addon-style')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @if (Request::url('/katalog', '*'))
            @include('components.navbar-katalog')
        @else
            @include('components.navbar-homepage')
        @endif


        @include('sweetalert::alert')
        {{-- Content --}}
        @yield('content')


        @include('components.footer')

        {{-- Script --}}

        @stack('prepend-script')
        @include('components.script')
        @stack('addon-script')
    </div>
</body>

</html>
