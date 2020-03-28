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
                        <li>
                            <a href="#" class="text-gray-500" aria-current="page">{{ $category->name }}</a>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-3 xl:-mx-3 mb-16">
                <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-2/6 lg:my-3 lg:px-3 lg:w-2/6 xl:my-3 xl:px-3 xl:w-2/6">
                    @include('frontend.journals.shared-sidebar')
                </div>
                <div class="w-full  overflow-hidden md:my-2 md:px-2 md:w-4/6 lg:my-3 lg:px-3 lg:w-4/6 xl:my-3 xl:px-3 xl:w-4/6">
                    <div class="md:ml-5">
                            <div class="text-white leading-none p-5 bg-blue-800">
                                <h2 class="inline-block text-2xl font-sans">{{ $category->name }}</h2>
                                @if(!request()->is('journals'))
                                    <a href="{{ route('journals') }}" class="ml-2 hover:underline">View all journals</a>
                                @endif
                            </div>
                            <div class="flex flex-wrap -mx-2 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                                @foreach($category->journals as $journal)
                                    <div class="my-2 px-2 w-full  sm:my-2 sm:px-2 sm:w-full md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                                        <a href="{{ route('journals.single', ['id' => $journal->id]) }}">
                                            <div class="group flex flex-col items-center justify-center border-2 hover:border-blue-800">
                                                <img src="{{ url($journal->image->path.'/'.$journal->image->name) }}" class="w-full object-contain">
                                                <div class="w-full flex items-center justify-center bg-gray-200 text-blue-800 px-3 h-20 group-hover:bg-blue-800">
                                                    <h3 class="text-center font-bold mt-2 capitalize tracking-wide  group-hover:text-white"> {{ $journal->name }}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
