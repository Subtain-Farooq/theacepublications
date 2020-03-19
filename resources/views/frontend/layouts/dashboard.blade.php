@extends('frontend.layouts.app')


@section('content')

<div class="bg-white">
    <div class="container px-4 mx-auto">
        <div class="flex sm:items-center  sm:flex-row flex-col bg-white border p-8 mt-8">
            <div class="mr-2 lg:w-1/6 md:w-1/6">
                @if(isset(Auth::user()->image->path))
                    <img class="md:w-40 sm:w-24" src="{{ url(Auth::user()->image->path. Auth::user()->image->name) }}">
                @else
                    <img class="md:w-40 md:pr-0 sm:pr-2 sm:w-32" src="{{ url('images/avatar.jpeg') }}">
                @endif

            </div>
            <div class="flex flex-col justify-start lg:w-3/6 md:w-4/6 sm:w-4/6 sm:mt-0 mt-2">
                <div class="">
                    <h1 class="text-blue-800 xl:text-4xl lg:text-3xl md:text-2xl sm:text-2xl text-2xl tracking-wide capitalize">{{ Auth::user()->title }} {{ Auth::user()->name }}</h1>
                    <ul class="xl:text-lg lg:text-base md:text-sm sm:text-xs">
                        <li class="">
                            <span class="font-semibold text-gray-700 mr-1">Email : </span> <span class="text-gray-700">{{ Auth::user()->email }}</span>
                        </li>
                        <li class="">
                            <span class="font-semibold text-gray-700 mr-1">Member Since . </span><span class="text-gray-700">{{ Auth::user()->created_at->toFormattedDateString() }}</span>
                        </li>
                        <li class="">
                            <span class="font-semibold text-gray-700 mr-1">Last Login : </span><span class="text-gray-700">{{ Auth::user()->last_login_at->toFormattedDateString() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex lg:flex-row md:flex-col flex-col md:-my-1 sm:justify-end sm:mt-0 mt-3 lg:w-3/6 md:w-2/6 sm:w-2/6 sm:flex-col items-center -mx-1">
                <div class="flex lg:flex-col lg:items-start lg:flex-1 lg:mx-1 md:my-1 md:w-full md:items-center p-2 bg-gray-300 sm:my-1 sm:w-full sm:items-center w-full items-center my-1">
                    <h3 class="xl:text-6xl lg:text-5xl lg:block md:inline-block md:mr-2 sm:mr-1 mr-2 md:text-2xl leading-none md:font-medium text-gray-600">{{ Auth::user()->manuscripts()->count() }}</h3>
                    <span class="inline-block xl:text-2xl lg:text-xl md:text-base sm:text-sm font-bold text-gray-700 capitalize">Submitted Articles</span>
                </div>
                <div class="flex lg:flex-col lg:items-start lg:flex-1 lg:mx-1 md:my-1 md:w-full md:items-center p-2 bg-blue-200 sm:w-full sm:my-1 sm:items-center w-full my-1 items-center">
                    <?php $invoice = null; ?>
                    @foreach( Auth::user()->manuscripts as $manuscript)
                        @if(isset( $manuscript->invoice))
                                <?php $invoice =  $manuscript->invoice->where('status', 'pending')->count() ?>
                        @endif
                    @endforeach
                    <h3 class="xl:text-6xl lg:text-5xl lg:block md:inline-block md:mr-2 sm:mr-1 mr-2 md:text-2xl leading-none font-medium  text-gray-600">
                        @if(isset($invoice))
                            {{ $invoice }}
                        @else
                            0
                        @endif
                    </h3>
                    <span class="inline-bloxk lg:text-xl xl:text-2xl md:text-base sm:text-sm font-bold text-gray-700">Unpaid Invoices</span>
                </div>
                {{-- <div class="flex-1  mx-1 p-2 bg-gray-300">
                     <h3 class="text-6xl leading-none font-medium text-gray-600">0</h3>
                     <span class="text-2xl font-bold text-gray-800">Pending Ads</span>
                 </div>--}}
            </div>
        </div>
        <div class="bg-blue-800">
            <div class="flex flex-row flex-wrap justify-start overflow-hidden">
                <a href="{{ route('dashboard') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard')) bg-blue-900 @else hover:bg-blue-700 @endif">Dashboard</a>
                <a href="{{ route('dashboard.profile') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/profile*')) bg-blue-900 @else hover:bg-blue-700 @endif ">Profile</a>
                <a href="{{ route('manuscript.create') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/manuscript')) bg-blue-900 @else hover:bg-blue-700 @endif">Submit Manuscript</a>
                <a href="{{ route('manuscript.manage') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/manuscript-management*')) bg-blue-900 @else hover:bg-blue-700 @endif">Manuscript Management</a>
                <a href="{{ route('invoice') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/invoice*')) bg-blue-900 @else hover:bg-blue-700 @endif">Invoice Management</a>

                <a href="{{ route('change-password') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/change-password')) bg-blue-900 @else hover:bg-blue-700 @endif">Change Password</a>
            </div>
        </div>
    </div>
</div>

@yield('dashboard-content')

@endsection
