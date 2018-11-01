<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('styles')
    </head>
    <body>

        @yield('content')

        <script src="{{ asset('js/manifest.js') }}" charset="utf-8"></script>
        <script src="{{ asset('js/vendor.js') }}" charset="utf-8"></script>
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

        @stack('scripts')
    </body>
</html>
