@extends('frontend.layouts.app')

@section('content')
<div class="bg-white">
    <div class="container px-5 mx-auto">

        @if(session('status'))
            <div class="bg-teal-200 text-teal-700 px-6 py-4 my-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="max-w-lg mx-auto my-20">
            @if(session('resent'))
            <div class="bg-teal-200 text-teal-700 px-6 py-4 my-4" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif
            <div class="border mx-auto px-10 py-8">
                <h2 class="text-blue-900 text-3xl font-bold tracking-wide">{{ __('Verify Your Email Address') }}</h2>
                <div class="my-3">
                    <p class="text-gray-700 inline">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}

                    </p>
                    <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="text-blue-700 hover:underline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
