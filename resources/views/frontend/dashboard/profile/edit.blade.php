@extends('frontend.layouts.dashboard')

@section('dashboard-content')

<div class="bg-white">
    <div class="container mx-auto px-4">
        <div class="border mb-16 mt-6 px-16 py-12">
            <div class="flex justify-between items-center">
                <h1 class="text-blue-900 text-3xl">Edit Profile</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <div class="mt-2">
                <form method="POST" action="{{ route('dashboard.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-4 xl:-mx-4">
                    <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">
                        <div class="my-3">
                            <label class="text-lg text-blue-800">Select Title</label>
                            <div class="relative">
                                <select name="title" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('title') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">

                                    <option value="">Title</option>
                                    <option value="dr." {{ Auth::user()->title == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    <option value="prof." {{ Auth::user()->title == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                    <option value="mr." {{ Auth::user()->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                    <option value="miss." {{ Auth::user()->title == 'Miss.' ? 'selected' : '' }}>Miss.</option>
                                    <option value="ms." {{ Auth::user()->title == 'Ms.' ? 'selected' : '' }}>Ms.</option>

                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            @error('title')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label class="text-lg text-blue-800">Full Name</label>
                            <input type="text" name="name" class="w-full px-3 py-2 border-2 outline-none @error('name') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ !is_null(old('name')) ? old('name') : Auth::user()->name }}" autocomplete="name" placeholder="Full Name">
                            @error('name')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label class="text-lg text-blue-800">Mobile Number</label>
                            <input type="text" name="mobile_number" class="w-full px-3 py-2 border-2 outline-none @error('mobile_number') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ !is_null(old('mobile_number')) ? old('mobile_number') : Auth::user()->mobile_number }}" autocomplete="mobile_number" placeholder="Mobile Number">
                            @error('mobile_number')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="text-lg text-blue-800">Fax Number</label>
                            <input type="text" name="fax_number" class="w-full px-3 py-2 border-2 outline-none @error('fax_number') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ !is_null(old('fax_number')) ? old('fax_number') : Auth::user()->fax_number }}" autocomplete="fax_number" placeholder="Fax Number">
                            @error('fax_number')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">

                        <div class="my-3">
                            <label class="text-lg text-blue-800">Select Country</label>
                            <div class="relative">
                                <select  name="country" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('country') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ Auth::user()->country->id ==  $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            @error('country')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label class="text-lg text-blue-800">LiveDna ID</label>
                            <input type="text" name="live_dna" class="w-full px-3 py-2 border-2 outline-none @error('live_dna') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ !is_null(old('live_dna')) ? old('live_dna') : Auth::user()->live_dna }}" autocomplete="live_dna" placeholder="LiveDna ID">
                            @error('live_dna')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="text-lg text-blue-800">Scopus ID</label>
                            <input type="text" name="scopus" class="w-full px-3 py-2 border-2 outline-none @error('scopus') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ !is_null(old('scopus')) ? old('scopus') : Auth::user()->scopus }}" autocomplete="scopus" placeholder="Scopus ID">
                            @error('scopus')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label class="text-lg text-blue-800">Profile Image</label>
                            <input type="file" name="avatar" class="w-full px-3 py-1 border-2 outline-none @error('avatar') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                            @error('avatar')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <button type="submit" class="bg-blue-800 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-blue-900 focus:outline-none">Update</button>
                        <a href="{{ route('dashboard.profile') }}" class="bg-red-600 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-red-700 focus:outline-none">Cancel</a>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
