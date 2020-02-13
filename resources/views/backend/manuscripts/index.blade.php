@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-3">All Manuscripts</h3>

                <div>
                    <span class="font-bold mr-4">Sort By: </span>
                    <a href="@if(request()->is('manuscripts')) # @else {{ route('console.manuscripts') }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts')) bg-gray-400 cursor-default @else bg-gray-300 hover:bg-gray-400 @endif">All</a>
                    <a href="@if(request()->is('manuscripts/submitted')) # @else {{ route('console.manuscripts', ['status' => 'submitted']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/submitted')) bg-orange-300 cursor-default @else bg-orange-200 hover:bg-orange-300 @endif">Submitted</a>
                    <a href="@if(request()->is('manuscripts/payment awaited')) # @else {{ route('console.manuscripts', ['status' => 'payment awaited']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/payment awaited')) bg-purple-400 cursor-default @else bg-purple-200 hover:bg-purple-300 @endif">Payment Awaited</a>
                    <a href="@if(request()->is('manuscripts/in review')) # @else {{ route('console.manuscripts', ['status' => 'in review']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/in review')) bg-teal-400 cursor-default @else bg-teal-200 hover:bg-teal-300 @endif">In Review</a>
                    <a href="@if(request()->is('manuscripts/review in progress')) # @else {{ route('console.manuscripts', ['status' => 'review in progress']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/review in progress')) bg-green-400 cursor-default @else bg-green-200 hover:bg-green-300 @endif">Review in Progress</a>
                    <a href="@if(request()->is('manuscripts/accepted')) # @else {{ route('console.manuscripts', ['status' => 'accepted']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/accepted')) bg-blue-400 cursor-default @else bg-blue-200 hover:bg-blue-300 @endif">Accepted</a>
                    <a href="@if(request()->is('manuscripts/rejected')) # @else {{ route('console.manuscripts', ['status' => 'rejected']) }} @endif" class="inline-block px-3 py-1 rounded @if(request()->is('manuscripts/rejected')) bg-red-400 cursor-default @else bg-red-200 hover:bg-red-300 @endif">Rejected</a>
                </div>
            </div>
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif

            @if($manuscripts->isNotEmpty())
                <table class="w-full border">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2">Code</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">User Name</th>
                        <th class="px-4 py-2">Submitted Date</th>
                        <th class="px-4 py-2">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($manuscripts as $manuscript)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $manuscript->id }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $manuscript->code }}</td>
                            <td class="border px-4 py-2 text-center">{{ $manuscript->title }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if($manuscript->status == 'submitted')
                                        <span class="text-orange-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @elseif($manuscript->status == 'payment awaited')
                                        <span class="text-purple-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @elseif($manuscript->status == 'in review')
                                        <span class="text-teal-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @elseif($manuscript->status == 'review in progress')
                                        <span class="text-green-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @elseif($manuscript->status == 'accepted')
                                        <span class="text-blue-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @elseif($manuscript->status == 'rejected')
                                        <span class="text-red-500 capitalize">
                                            {{ $manuscript->status }}
                                        </span>
                                    @endif

                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                   {{ $manuscript->user->name }}
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                   {{ $manuscript->created_at->format('M d Y') }}
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.manuscripts.show', ['id' => $manuscript->id] ) }}" class="text-blue-500 mx-2 hover:underline">View</a>
                                   {{-- <a href="{{ route('console.categories.edit', ['id' => $manuscript->id] ) }}" class="text-green-500 mx-2 hover:underline">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('console.categories.destroy', ['id' => $manuscript->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Delete</button>
                                    </form>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @else
                <div class="max-w-lg mx-auto">
                    <img class="w-64 mx-auto" src="{{ url('/vendor/console/svg/not-found.svg') }}">
                    <h1 class="text-3xl text-gray-500 mt-4 text-center">No Data Found</h1>
                </div>
            @endif
        </div>
    </div>
@endsection


@section('script')


@endsection
