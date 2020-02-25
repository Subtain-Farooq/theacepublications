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
                        <h1 class="text-2xl main-font mt-3 mb-4 font-bold text-blue-800 border-l-4 border-blue-800 inline-block pl-2">Archive</h1>
                        <div class="-my-3">

                            @if($journal->archives->isNotEmpty())

                                @foreach($journal->archives->unique('year')->sortByDesc('year') as $archive)
                                    <div class="my-8">
                                        <h3 class="text-2xl text-white bg-blue-800 leading-none inline-block px-4 py-2">Volume: {{ $archive->volume }} | Year: {{ $archive->year }}</h3>
                                        <div class="py-8 px-10 bg-gray-200 flex flex-wrap">
                                            @foreach($journal->archives as $past_issue)
                                                @foreach($past_issue->articles as $article)
                                                    @if($past_issue->volume == $archive->volume)
                                                        <a href="{{ route('manuscript.archived', ['doi' => $article->doi]) }}" class="text-gray-700 text-lg hover:text-red-600 mr-10">Issue {{ $past_issue->issue_number }}</a>
                                                    @endif
                                                @endforeach

                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="bg-gray-200 p-10 mt-6 text-center text-2xl">
                                    No Archived Data
                                </div>
                            @endif




               {{--             @for($j=1; $j<=9; $j++)
                                <div class="my-10">
                                    <h3 class="text-2xl text-white bg-blue-800 leading-none inline-block px-4 py-2">Volume 14 (1-7) 2019</h3>
                                    <div class="py-8 px-10 bg-gray-200 flex flex-wrap">
                                        @for($i=1; $i<=7; $i++)
                                            <a href="" class="text-gray-700 text-lg hover:text-red-600 mr-10">Issue {{$i}}</a>
                                        @endfor
                                    </div>
                                </div>
                            @endfor--}}

                            {{--<div class="flex flex-wrap overflow-hidden mt-4">
                                @for($i=1; $i<=17; $i++)
                                    <div class="w-full overflow-hidden my-2">
                                        <div class="border">
                                            <div class="flex justify-between flex-wrap bg-gray-200 px-3 py-2">
                                                <span class="text-gray-800 text-lg">
                                                    Empowering Leadership as a Predictor for Employees Creativity: The Mediating Role of Intrinsic Motivation
                                                </span>

                                            </div>
                                            <div class="mt-1 text-sm text-justify px-3 py-2">
                                                Tariq A.R.M. Alsaadi, Gamal S.A. Khalifa, Abuelhassan Elshazly Abuelhassan, Osama Isaac and Ibrhim Alrajawi
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>--}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

