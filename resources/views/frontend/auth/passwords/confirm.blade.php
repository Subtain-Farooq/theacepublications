@extends('frontend.layouts.app')

@section('content')
<div class="bg-white">
    <div class="container px-5 mx-auto">
        <div class="max-w-lg border mx-auto my-20 px-10 py-8">
            <h2 class="text-blue-900 text-3xl font-bold tracking-wide">{{ __('Confirm Password') }}</h2>
            <p class="text-gray-600">{{ __('Please confirm your password before continuing.') }}</p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="my-3">
                    <input type="text" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror"  name="password" required autocomplete="current-password" placeholder="Current Password">
                    @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror

                </div>
                <div class="w-full">
                    <button type="submit" class="bg-blue-800 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-blue-900 focus:outline-none">{{ __('Confirm Password') }}</button>
                    <a href="{{ route('dashboard') }}" class="bg-red-600 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-red-700 focus:outline-none">Cancel</a>
                </div>
                @if (Route::has('password.request'))
                    <a class="block my-2 text-blue-500 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
</div>

{{--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

--}}

@endsection
