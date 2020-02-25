@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4">

            <div class="mt-8 mb-6">
                <nav class="text-black font-bold " aria-label="Breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <li class="flex items-center text-blue-700">
                            <a href="{{ route('home') }}" class="">Home</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center text-blue-700">
                            <a href="{{ route('journals') }}">Journals</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center text-blue-700">
                            @foreach($journal->categories as $category)
                                @if($loop->first)
                                    <a href="{{ route('journals.bySubject', ['id' => $category->id]) }}">
                                        {{ $category->name }}
                                    </a>
                                @endif
                            @endforeach
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li>
                            <span class="text-gray-500" aria-current="page">{{ $journal->name }}</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-3 xl:-mx-3 mb-16">
                <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-2/6 lg:my-3 lg:px-3 lg:w-2/6 xl:my-3 xl:px-3 xl:w-2/6">
                    @include('frontend.journals.shared-sidebar')
                </div>

                <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-4/6 lg:my-3 lg:px-3 lg:w-4/6 xl:my-3 xl:px-3 xl:w-4/6">

                    @include('frontend.journals.single.shared-title')

                    <div class="my-5">
                        <h1 class="text-2xl main-font mt-3 mb-4 font-bold text-blue-800 border-l-4 border-blue-800 inline-block pl-2">Editorial Board Members</h1>
                        <div class="">

                            <div class="flex flex-wrap overflow-hidden -my-2">

                                @foreach($journal->editors as $editor)
                                    <div class="w-full overflow-hidden my-2">
                                        <div class="flex">
                                            @if($editor->image)
                                            <img src="{{ url($editor->image->path.$editor->image->name) }}" class="w-32 h-32">
                                            @else
                                                <img src="{{ url('images/avatar.jpeg') }}" class="w-32 h-32">
                                            @endif
                                            <div class="border w-full">

                                                <div class="flex flex-row justify-between flex-wrap bg-gray-200 px-3 py-2">
                                                    <span class="text-gray-800 text-lg font-bold tracking-wide">
                                                        {{ $editor->name }}
                                                    </span>
                                                        <span class="text-sm text-gray-600">
                                                        {{ $editor->country->name }}
                                                    </span>
                                                </div>
                                                <div class="mt-1 text-sm text-justify px-3 py-2">
                                                    {{ $editor->departmental_address }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

