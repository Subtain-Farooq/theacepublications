@extends('frontend.layouts.dashboard')


@section('dashboard-content')

    <div class="bg-white">
        <div class="container mx-auto px-4">
            <div class="border p-16 flex items-center justify-center mb-16 mt-6">
                <div class="w-full max-w-2xl">
                    <form method="POST" action="{{ route('change-password.update') }}">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">New Password</label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="password" name="password" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="" placeholder="New Password">
                                @error('password')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Confirm New Password</label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="password" name="password_confirmation" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="" placeholder="Confirm New Password">
                                @error('password')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-center">

                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <div class="w-full">
                                    <button type="submit" class="bg-blue-800 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-blue-900 focus:outline-none">Update</button>
                                    <a href="{{ route('dashboard.profile') }}" class="bg-red-600 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-red-700 focus:outline-none">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
