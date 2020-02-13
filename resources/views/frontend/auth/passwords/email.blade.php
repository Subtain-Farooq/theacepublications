@extends('frontend.layouts.app')

@section('content')

<div class="bg-white py-32">
    <div class="container mx-auto px-4">
        <div class="w-full max-w-xl mx-auto ">
            <div class="bg-white pb-16 pt-10">

                @if(session('status'))
                    <div class="bg-teal-200 text-teal-700 px-6 py-4 my-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="bg-blue-900 mb-5">
                    <h1 class="text-4xl leading-none tracking-wider main-font font-semibold p-5 text-white">{{ __('Reset Password') }}</h1>
                </div>
                <p class="text-sm">Please enter your email address below and we will send you an email to change your password.</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="my-4">

                        <input id="email" type="email" class="w-full px-3 py-2 border-2 outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"  placeholder="Email-Address">

                        @error('email')
                            <span class="text-red-600" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-start mt-5">

                        <button type="submit" class="text-blue-800 leading-none font-bold text-lg uppercase px-8 py-3 tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white">Send Email</button>
                        <a href="{{ route('login') }}" class="ml-2 text-gray-600  leading-none font-bold text-lg uppercase px-8 py-3 tracking-wider border-2 border-gray-600 hover:bg-gray-600 hover:text-white">Cancel</a>

                        {{--<a href="{{ route('login') }}" class="text-blue-700 hover:underline">Cancel</a>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--

    <div class="container mx-auto">

        <div class="max-w-xl mx-auto mt-16">
            @if(session('status'))
                <div class="bg-teal-200 text-teal-700 px-6 py-4 my-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="bg-white p-12">
                <div class="bg-blue-800 mb-5">
                    <h1 class="text-4xl leading-none tracking-wide main-font font-semibold p-5 text-white">{{ __('Reset Password') }}</h1>
                </div>
                <p class="text-sm">Please enter your email address below and we will send you an email to change your password.</p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="my-4">

                        <input id="email" type="email" class="w-full px-3 py-2 border outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" >

                        @error('email')
                        <span class="text-red-600" role="alert">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mt-5">

                        <button type="submit" class="text-blue-800 leading-none font-bold text-lg uppercase px-8 py-4 tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white">Send Email</button>

                        <a href="{{ route('login') }}" class="text-black hover:underline">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
--}}

@endsection
