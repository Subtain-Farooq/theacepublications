@extends('frontend.layouts.dashboard')

@section('dashboard-content')
<div class="bg-white">
    <div class="container mx-auto px-4">
        @if(Session::has('alert'))
            @component('frontend.layouts.shared.alert', ['alert' => 'green'])
                {{ Session::get('message') }}
            @endcomponent
        @endif
        <div class="border mb-16 mt-6 px-16 py-12">
            <div class="flex justify-between items-center">
                <h1 class="text-blue-900 text-3xl">Profile</h1>
                <a href="{{ route('dashboard.profile.edit') }}" class="text-blue-600 hover:text-red-400">Edit</a>
            </div>
            <div class="mt-2">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-4 xl:-mx-4">

                        <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">
                            <ul class="">
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block  font-semibold text-gray-700">Full Name: </div>
                                    <span class="text-gray-700">{{ AUth::user()->title }} {{ Auth::user()->name }}</span>
                                </li>
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block font-semibold text-gray-700">Email: </div> <span class="text-gray-700">{{ Auth::user()->email }}</span>
                                </li>
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block  font-semibold text-gray-700">Mobile No. </div> <span class="text-gray-700">{{ Auth::user()->mobile_number }}</span>
                                </li>
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block  font-semibold text-gray-700">Fax No. </div> <span class="text-gray-700">{{ Auth::user()->fax_number }}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">
                            <ul class="">
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block font-semibold text-gray-700">Live DNA ID: </div>
                                    @if(Auth::user()->live_dna)
                                        <span class="text-gray-700">{{ Auth::user()->live_dna }}</span>
                                    @else
                                        <span class="text-red-600 bg-red-200 px-2 py-1 text-sm">Not Verified</span>
                                    @endif
                                </li>
                                <li class="pb-2">
                                    <div class="md:w-64 md:inline-block sm:block font-semibold text-gray-700">Scopus ID: </div>
                                    @if(Auth::user()->scopus)
                                      <span class="text-gray-700">{{ Auth::user()->scopus }}</span>
                                    @else
                                        <span class="text-red-600 bg-red-200 px-2 py-1 text-sm">Not Verified</span>
                                    @endif
                                </li>
                                <li class="pb-3">
                                    <div class="md:w-64 md:inline-block sm:block font-semibold text-gray-700">Member Since: </div> <span class="text-gray-700">{{ Auth::user()->created_at->toFormattedDateString() }}</span>
                                </li>
                                <li class="pb-3">
                                    <div class="md:w-64 md:inline-block sm:block font-semibold text-gray-700">Country Name: </div> <span class="text-gray-700">{{ Auth::user()->country->name }}</span>
                                </li>
                            </ul>
                        </div>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
