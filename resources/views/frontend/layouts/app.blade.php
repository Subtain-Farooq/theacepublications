<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="develoepr" content="Subtain Farooq">
    <meta name="designer" content="Subtain Farooq">
    <meta name="email" content="subtainfrq@gmail.com">
    <meta name="mobile" content="+923007998354">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon" sizes="16x16">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//db.onlinewebfonts.com/c/a78cfad3beb089a6ce86d4e280fa270b?family=Calibri" rel="stylesheet" type="text/css"/>
</head>
<body class="">
    <div id="app">
        {{-- @include('frontend.layouts.components.topbar') --}}
        @include('frontend.layouts.components.navbar')

        <main>
            @yield('content')
        </main>

        @include('frontend.layouts.components.footer')
    </div>

    @yield('script')

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("hidden");
        }
        function guideline() {
            document.getElementById("guideButton").classList.toggle("hidden");
        }
        function policy() {
            document.getElementById("policyButton").classList.toggle("hidden");
        }
        function actionDrop() {
            document.getElementById("actionDropdown").classList.toggle("hidden");
        }
    </script>
</body>
</html>
