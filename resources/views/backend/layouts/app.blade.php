<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('style')

    @yield('head-script')

    <link href="{{ asset('vendor/console/css/app.css') }}" rel="stylesheet">

    <style>

        [class^=uil-]:before, [class*=" uil-"]:before {
            margin-left: 0em;
        }
        input:checked + svg {
            display: block;
        }
        .custom-label input:checked + svg {
            display: block !important;
        }
    </style>
</head>
<body class="bg-gray-100">
<div id="app">
    @include('backend.layouts.components.navbar')
    <div class="px-8">
        <main class="mx-auto">
         {{--   <div class="w-full my-2">
                @include('backend.layouts.components.sidebar')
            </div>--}}
            <div class="w-full mt-4 mb-12">
                @yield('content')
            </div>
        </main>
    </div>
</div>

@yield('script')

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("hidden");
    }
    function actionDrop() {
        document.getElementById("actionDropdown").classList.toggle("hidden");
    }
    function manuscriptDrop() {
        document.getElementById("manuscriptDropdown").classList.toggle("hidden");
    }
</script>
</body>
</html>
