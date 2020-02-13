@extends('frontend.layouts.app')

@section('content')

    <div class="bg-white py-32">
        <div class="container mx-auto px-4">
            <div class="w-full max-w-md mx-auto ">

                <div class="bg-white">
                    <div class="bg-blue-800 mb-5">
                        <h1 class="text-4xl leading-none tracking-wider main-font font-semibold p-5 text-white">Login</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="my-3">

                            <input type="email" name="email" class="w-full px-3 py-2 border-2 outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                            @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">

                            <input type="password" name="password" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" placeholder="Password">
                            @error('password')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="custom-label flex items-center">
                                <div class="flex justify-center h-5 w-5 bg-white border border-gray-300 mr-2">
                                    <input type="checkbox" name="remember" class="hidden" >
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                                </div>
                                <span class="select-none">Keep me logged in</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between mt-5">

                            <button type="submit" class="text-blue-800 leading-none font-bold text-lg uppercase px-8 py-3 tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white focus:outline-none">Login</button>

                            <a href="{{ route('password.request') }}" class="text-blue-700 hover:underline">Forgot Your Password ?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>









{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
