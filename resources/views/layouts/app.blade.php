<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <a id="start"></a>
    @include('inc.errors')
    @auth
        @include('inc.sidebar')
    @endauth


    <div class="main-container">
        @yield('content')
    </div>


    <script src="{{ asset('js/app/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/app/flickity.min.js') }}"></script>
    <script src="{{ asset('js/app/easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/app/parallax.js') }}"></script>
    <script src="{{ asset('js/app/typed.min.js') }}"></script>
    <script src="{{ asset('js/app/datepicker.js') }}"></script>
    <script src="{{ asset('js/app/isotope.min.js') }}"></script>
    <script src="{{ asset('js/app/ytplayer.min.js') }}"></script>
    <script src="{{ asset('js/app/lightbox.min.js') }}"></script>
    <script src="{{ asset('js/app/granim.min.js') }}"></script>
    <script src="{{ asset('js/app/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('js/app/countdown.min.js') }}"></script>
    <script src="{{ asset('js/app/twitterfetcher.min.js') }}"></script>
    <script src="{{ asset('js/app/spectragram.min.js') }}"></script>
    <script src="{{ asset('js/app/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/app/scripts.js') }}"></script>

    <script>
        $(document).ready(function () {
                    $('.tab__content section.switchable').mouseenter(function () {
                        $(this).append('<div class="switchable-toggle label">Switch Sides</div>');
                    });
                    $('.tab__content section.switchable').mouseleave(function () {
                        $(this).find('.switchable-toggle').remove();
                    });
                    $(document).on('click', '.switchable-toggle', function () {
                        $(this).closest('section').toggleClass('switchable--switch');
                    });
                });
    </script>
</body>

</html>