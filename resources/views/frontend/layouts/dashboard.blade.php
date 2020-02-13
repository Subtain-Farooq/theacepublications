@extends('frontend.layouts.app')


@section('content')

<div class="bg-white">
    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between bg-white border p-8 mt-8">
            <div class="mr-2 w-1/6">
                @if(isset(Auth::user()->image->path))
                    <img class="w-40 h-40 rounded-sm" src="{{ url(Auth::user()->image->path. Auth::user()->image->name) }}">
                @else
                    <img class="w-40 h-40 rounded-sm" src="{{ url('images/avatar.jpeg') }}">
                @endif

            </div>
            <div class="flex flex-col justify-start w-3/6">
                <h1 class="text-blue-900 text-4xl font-bold tracking-wide capitalize">{{ Auth::user()->title }} {{ Auth::user()->name }}</h1>
                <ul>
                    <li class="text-lg">
                        <span class="font-semibold text-gray-700 mr-1">Email : </span> <span class="text-gray-700">{{ Auth::user()->email }}</span>
                    </li>
                    <li class="text-lg">
                        <span class="font-semibold text-gray-700 mr-1">Member Since . </span><span class="text-gray-700">{{ Auth::user()->created_at->toFormattedDateString() }}</span>
                    </li>
                    <li class="text-lg">
                        <span class="font-semibold text-gray-700 mr-1">Last Login : </span><span class="text-gray-700">{{ Auth::user()->last_login_at->toFormattedDateString() }}</span>
                    </li>
                </ul>
            </div>
            <div class="flex justify-end w-3/6 items-center -mx-1">
                <div class="flex-1 mx-1 p-2 bg-gray-300">
                    <h3 class="text-6xl leading-none font-medium text-gray-600">{{ Auth::user()->manuscripts()->count() }}</h3>
                    <span class="text-2xl font-bold text-gray-700 capitalize">Submitted Articles</span>
                </div>
                <div class="flex-1 mx-1 p-2 bg-blue-200">
                    <h3 class="text-6xl leading-none font-medium text-gray-600">2</h3>
                    <span class="text-2xl font-bold text-gray-700">Unpaid Invoices</span>
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
                <a href="#" class="px-5 py-4 text-white text-lg hover:bg-blue-700">Unpaid Invoices</a>
                <a href="#" class="px-5 py-4 text-white text-lg hover:bg-blue-700">Payment Receipts</a>
                <a href="{{ route('change-password') }}" class="px-5 py-4 text-white text-lg @if(request()->is('dashboard/change-password')) bg-blue-900 @else hover:bg-blue-700 @endif">Change Password</a>
            </div>
        </div>
    </div>
</div>

@yield('dashboard-content')

@endsection
