<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} Login</title>
    <!-- Scripts -->
    <script src="{{ asset('vendor/console/js/app.js') }}" defer></script>

    <link href="{{ asset('vendor/console/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body >
<div class="container mx-auto h-screen">
    <div class="flex items-center h-screen justify-center content-center">
        <div class="w-full max-w-md mx-auto">

            @error('email')
            <div class="bg-red-500 text-white px-4 py-3 rounded relative my-5" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
            </div>
            @enderror

            <div class="bg-gray-200 p-16 rounded-lg">
                <h2 class="text-blue-700 text-4xl font-bold text-center mb-8">Welcome Back</h2>
                <form method="POST" action="">
                    @csrf
                    <div class="my-2">
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full appearance-none rounded px-3 py-2 @error('email') bg-red-100 text-red-500 placeholder-red-500 border-2 border-red-400 focus:outline-none focus:bg-white @else text-gray-700 border-2 border-gray-300 focus:outline-none focus:border-blue-500  @enderror" placeholder="Email Address">
                        @error('email')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <input type="password" name="password" value="{{ old('password') }}" class="w-full appearance-none rounded px-3 py-2 @error('password') bg-red-100 text-red-500 placeholder-red-500 border-2 border-red-400 focus:outline-none focus:bg-white @else text-gray-700 border-2 border-gray-300 focus:outline-none focus:border-blue-500  @enderror" placeholder="Password">
                        @error('password')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full px-4 py-2 my-2 font-bold text-white bg-blue-700 tracking-wider shadow-md rounded focus:outline-none hover:bg-blue-600">
                            Login
                        </button>
                       {{-- <a href="{{ route('password.request') }}" class="text-blue-700 font-bold hover:underline">Forgot Password ?</a>--}}
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
</body>
</html>
