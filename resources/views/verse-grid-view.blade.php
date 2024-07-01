<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bible Reading Guide</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @laravelPWA
</head>

<body>
    <div class="main-wrapper">
        <section class="navbar-header">
            <h1><strong>Bible Reading Guide </strong><small>2.0</small></h1>
            <button type="button" href="{{ route('login') }}" class="btn btn-default">Sign In</button>
        </section>

        <div class="row nav-controls">
            <div class="col-6">
                <div class="btn-group flex-wrap">
                    <button type="button" style="background-color: teal; color: white;"
                        class="mb-1 mt-1 me-1 btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                        {{ ucfirst($month) }} <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                        @foreach ($availableMonths as $availableMonth)
                            <a class="dropdown-item text-1" href="{{ route('home', strtolower($availableMonth)) }}">
                                {{ ucfirst($availableMonth) }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p>
                <div class="btn-group flex-wrap float-end">
                    <a href="/list" type="button"
                        class="btn
                    @if (Request::is('list-view*')) btn-primary @else btn-default @endif">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="/grid" type="button"
                        class="btn @if (!Request::is('list-view') && (Request::is($month) || Request::is('/'))) btn-primary @else btn-default @endif">
                        <i class="fas fa-table-cells-large"></i>
                    </a>
                </div>
                </p>
            </div>
        </div>
        <section class="sidebar-section" style="display: none">
            <div class="sidebar-wrapper">
                <h2><strong>Months</strong></h2>
                <div class="sidebar-icon">
                    <i class=" fas fa-xmark"></i>
                </div>
                <ul class="text-center">
                    <li>
                        January
                    </li>
                    <li>February</li>
                    <li>March</li>
                    <li>April</li>
                    <li>May</li>
                    <li>June</li>
                    <li>July</li>
                    <li>August</li>
                    <li>September</li>
                    <li>October</li>
                    <li>November</li>
                    <li>December</li>
                </ul>
            </div>
        </section>
        <section class="content">
            <div id="verses" class="main-verse-wrapper pt-2">
                @foreach ($verses as $day => $verseData)
                    @php
                        $id = $month . $day;
                        $verse = $verseData->first();
                        $isCurrentDay = $day == $currentDay;
                    @endphp

                    <div class="verse-card-wrapper" id="card-{{ $id }}">
                        <div class="verse-card-header">
                            <div class="verse-day text-center">
                                {{ $day }}
                            </div>
                            <p>{{ ucfirst($month) }}</p>
                        </div>
                        <div class="verse-wrapper">
                            <div class="verse-card-verse-content">
                                <div class="verse-day-text lead">
                                    Morning
                                </div>
                                <p class="alternative-font">{{ $verse->morning }}</p>
                            </div>
                            <div class="verse-journal-wrapper">
                                <i class="fas fa-clipboard-check mr-2 text-success"></i>
                                Journal Notebook Complete
                            </div>
                            <hr />
                            <div class="verse-card-verse-content">
                                <div class="verse-day-text lead">
                                    Evening
                                </div>
                                <p class="alternative-font">{{ $verse->evening }}</p>
                            </div>
                            <div class="verse-journal-wrapper">
                                <i class="fas fa-notdef mr-2 text-danger"></i>
                                Journal Notebook Missing
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="footer text-center p-10">
            <a href="#">Kingstech </a>&copy; 2024 Allrights Reserved
        </section>
    </div>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentDay = {{ $currentDay }};
            const element = document.getElementById('card-{{ $month }}' + currentDay);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    </script>
    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('theme/porto/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('theme/porto/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('theme/porto/js/theme.init.js') }}"></script>

</body>

</html>
