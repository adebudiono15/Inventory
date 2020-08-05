<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="icon" href="{{ url('assets/assets/img/favicon.png') }}">

    <title>@yield('title') | PT.DOBHA PUTRA SALIM</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/bootstrap/css/extends-bootstrap.css') }}?1594418672">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- BEGIN: Icons CSS-->
    <link rel="stylesheet" href="{{ url('assets/assets/feathericons/feathericons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/boxicons/css/boxicons.min.css') }}">

    <!-- BEGIN: Plugins CSS -->
    <link rel="stylesheet" href="{{ url('assets/libs/vanilla-calendar/vanilla-calendar.css') }}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ url('assets/assets/css/style.css?1594418672') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/css/semi-dark-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/css/dark-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/css/responsive.css') }}?1594418672">
    <link rel="stylesheet" href="assets/css/ui.css">
    @stack('style')
</head>

<body class="vertical-menu semi-dark-theme">


    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Agenda -->
    @include('layouts.agenda')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content -->
    @yield('content')
    <!-- Last Content -->

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JS Scripts -->
    @stack('js-library')


    <!-- Scripts -->
    <script src="{{ url('assets/assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ url('assets/libs/vanilla-calendar/vanilla-calendar-min.js') }}?v=1"></script>
    <script src="{{ url('assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/app.js') }}?v=1.1.7"></script>
    <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/dashboard-chart.js') }}?v=1.1.9"></script>
    @stack('script')
</body>

</html>
