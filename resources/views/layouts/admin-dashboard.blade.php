<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/images/logo.svg">
    <title>
        @yield('title-dashboard')
    </title>
    {{-- Style --}}
    @stack('prepend-style')
    @include('components.style-dashboard')
    @stack('addon-style')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class=" min-height-400 dashboard position-absolute w-100"></div>

    {{-- Sidebar --}}
    @include('components.admin.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('components.admin.navbar')
        <!-- End Navbar -->
        @include('sweetalert::alert')
        {{-- Content --}}
        @yield('content-dashboard')


    </main>

    {{-- Script --}}

    @stack('prepend-script')
    @include('components.script-dashboard')
    @stack('addon-script')
</body>

</html>
