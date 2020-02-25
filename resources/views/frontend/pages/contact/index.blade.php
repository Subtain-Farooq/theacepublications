@extends('frontend.layouts.app')

@section('content')
<div class="bg-white py-24">
    <div class="container mx-auto px-4">
        @if(session()->has('alert'))
        <div class="bg-blue-200 mb-4 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p>{{ session('message') }}</p>
        </div>
        @endif
        <div class="flex">

            <div class=" w-2/5">
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

            <div class="w-3/5  border ml-4">
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

{{--

    <div class="bg-white">
        <div class="container mx-auto px-4 my-24">

            <h1 class="text-6xl text-white main-font font-bold bg-blue-900 px-8 text-left inline-block mb-6">Contact Information</h1>
            <p class="pb-12 text-justify text-lg">
                Office No. 29-B, Creek Tower,
                Baniyas Road, Dubai, UAE
            </p>
            <h1 class="text-5xl main-font font-bold text-blue-900 mb-2">Mission Statement</h1>
            <div class="text-lg">
                <p class="text-justify">
                    Intellectualize the global scientific society through advancement and innovation. The targets that we have secured from ourselves:
                </p>
                <ul class="list-disc list-inside my-5">
                    <li class="my-1">
                        ACE Journals will completely hold fast to standard peer review process.
                    </li>
                    <li class="my-1">
                        Every manuscript will subjected to quality peer-reviewing prior to publication and preceding production.
                    </li>
                    <li class="my-1">
                        Participate in removing barriers to online research publishing which will greatly aid to the progress of disseminating scientific information from different disciplines.
                    </li>
                </ul>
                <p class="my-5">
                    ACE Publications will reliably channel the scientific data that comes to us by checking that important information is always be given priority over the data that may not be benefit the academic scientific world.
                </p>
                <p class="text-justify">
                    Keeping the rising needs of the students and academicians at the post-graduation level, analysts at the Ph. D level, Educators, instructors, professors and regularly developing prerequisites of exploration researchers in perspective, ACE Publications always tries to welcome papers in every one of the subjects for distributed in its worldwide journals in the wake of fitting examination and compelling review. ACE Publications appropriates the progression and development in all subjects of the insightful world.
                </p>
            </div>
        </div>
    </div>
--}}


@endsection


