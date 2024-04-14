<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Car Rental </title>

    <!-- Bootstrap css -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-datetimepicker.min.css') }}" />

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">

    <!-- Magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">

    <!-- Owl Carousel css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- Navigation Section -->
    {{-- @include('site.components.navigation') --}}
    @include('site.components.navbar-v2')

    @yield('content')


    <!-- Newsletter-->
    @include('site.components.newsletter')

    <!-- Footer Section -->
    @include('site.components.footer')

    <!-- Bootstrap -->
    <script src="{{ asset('/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8">
    </script>

    <!-- Popup -->
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/magnific-popup-options.js') }}"></script>

    <!-- Carousel -->
    <script src="{{ asset('/assets/js/owl.carousel.js') }}"></script>

    <!-- Sticky Header -->
    <script src="{{ asset('/assets/js/jquery.sticky.js') }}"></script>

    <!-- Parallax -->
    <script src="{{ asset('/assets/js/jquery.parallax.js') }}"></script>

    <!-- Counter -->
    <script src="{{ asset('/assets/js/counter.js') }}"></script>
    <script src="{{ asset('/assets/js/smoothscroll.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&amp;callback=initMap"
        async defer></script>
    <script src="{{ asset('/assets/js/map.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
    @stack('scripts')
</body>

</html>
