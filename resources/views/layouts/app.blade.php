<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ asset('theme/porto/vendor/modernizr/modernizr.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="main-wrapper">
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
    </div>
    </script>
    <!-- Vendor -->
    <script src="{{ asset('theme/porto/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/common/common.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('theme/porto/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('theme/porto/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('theme/porto/js/custom.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('theme/porto/js/theme.init.js') }}"></script>
    @stack('script')

</body>

</html>
