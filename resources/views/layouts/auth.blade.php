<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="vendor/modernizr/modernizr.js"></script>

</head>
<section class="body-sign">
    <div class="center-sign">
        {{ $slot }}
    </div>

</section>

<!-- Vendor -->
<script src="{{ asset('plugins/theme/porto/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/common/common.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('plugins/theme/porto/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Specific Page Vendor -->

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('plugins/theme/porto/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('plugins/theme/porto/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('plugins/theme/porto/js/theme.init.js') }}"></script>

</body>

</html>
