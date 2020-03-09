@extends('frontend.layouts.app')

@section('content')
<div class="bg-white py-24">
    <div class="container mx-auto px-4">
        @if(session()->has('alert'))
        <div class="bg-blue-200 mb-4 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p>{{ session('message') }}</p>
        </div>
        @endif
        <div class="lg:flex w-full">
            <div class="lg:w-2/5 w-full">
                <div class="w-full">
                    <h1 class="text-3xl text-center py-6 text-white font-sans tracking-wide main-font bg-blue-800 text-left">Contact Information</h1>
                    <div class="py-8 px-12 border">
                        <div class="my-6">
                            <h2 class="text-blue-900 text-2xl font-bold">Address:</h2>
                            <address class="text-lg text-gray-700">
                                Office No. 29-B, Creek Tower, Baniyas Road, Dubai, UAE
                            </address>
                        </div>
                        <div class="my-6">
                            <h2 class="text-blue-900 text-2xl font-bold">Contact No.</h2>
                            <span class="text-lg text-gray-700">
                                +(971) 56-386-0507
                            </span>
                        </div>
                        <div class="my-6">
                            <h2 class="text-blue-900 text-2xl font-bold">Email.</h2>
                            <span class="text-lg text-gray-700">
                                acepublicationsdxb@gmail.com
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:w-3/5 lg:ml-4 lg:mt-0 mt-5 w-full border">
                <div class="p-12">
                    <form method="POST" action="{{ route('contact.sendEmail') }}">
                        @csrf

                        <div class="my-3">
                            <input type="text" name="subject" class="w-full px-3 py-2  border-2 outline-none @error('subject') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('subject') }}" autocomplete="subject" placeholder="Subject">
                            @error('subject')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">

                            <input type="text" name="name" class="w-full px-3 py-2  border-2 outline-none @error('name') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('name') }}" autocomplete="name" placeholder="Full Name">
                            @error('name')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">

                            <input type="email" name="email" class="w-full px-3 py-2  border-2 outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('email') }}" autocomplete="email" placeholder="Email Address">
                            @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">

                            <textarea name="message" rows="3" class="w-full px-3 py-2  border-2 outline-none @error('message') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" autocomplete="message" placeholder="Message">
                            {{ old('message') }}</textarea>

                            @error('message')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between mt-4">

                            <button type="submit" class="text-blue-800  leading-none font-bold text-lg uppercase px-8 py-3 tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white">Send Message</button>

                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
</div>



@endsection


