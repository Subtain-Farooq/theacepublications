@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            <div class="my-12">

                <nav class="text-blue-700 font-bold my-8" aria-label="Breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <li class="flex items-center">
                            <a href="{{ route('home') }}">Home</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('journals') }}">Journals</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('journals.single', ['id' => $article->currentIssue->journal->id]) }}">{{ $article->currentIssue->journal->name }}</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500" aria-current="page">{{ $article->doi }}</a>
                        </li>
                    </ol>
                </nav>


                <div class="my-8">
                    <div class="flex justify-between border-2 border-blue-800 p-8">

                            <div class="flex flex-col justify-between">
                                <div>
                                    <h2 class="text-3xl text-gray-800 mb-3 tracking-wide">{{ $article->currentIssue->journal->name }}</h2>
                                    <div class="">
                                        <p class="text-gray-700 tracking-wider leading-loose">
                                            <span class="font-bold">Year:</span> {{ $article->currentIssue->year }} |
                                            <span class="font-bold">Volume:</span> {{ $article->currentIssue->volume }} |
                                            <span class="font-bold">Issue:</span> {{ $article->currentIssue->issue_number }} |
                                            <span class="font-bold">Page No.</span> {{ $article->pages }}
                                        </p>
                                    </div>
                                    <p class="text-gray-700  tracking-wider leading-loose">
                                        <span class="font-bold">DOI:</span> <a href="{{ $article->doi_link }}" class="underline text-blue-700 hover:no-underline hover:text-blue-800">{{ $article->doi }}</a>
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ url($article->document->path. $article->document->name) }}" class="inline-block px-6 py-3 tracking-wider text-lg font-bold text-white bg-blue-700 hover:bg-blue-800" download>Download Article</a>
                                </div>

                            </div>

                        <div>
                            <img src="{{ url($article->currentIssue->journal->image->path.'/'.$article->currentIssue->journal->image->name) }}" class="border-2 w-40 object-left ">
                        </div>
                    </div>
                </div>

                <div class="my-8 pt-2">
                    <h1 class="text-3xl text-blue-800 text-justify tracking-wide leading-tight border-l-4 border-blue-800 pl-4">{{ $article->title }}</h1>
                    <p class="text-lg tracking-wider my-3">
                        <span class="font-bold pr-2 text-gray-700">Authors:</span>
                        <span class=" text-pink-800 ">
                            {{ $article->authors }}
                        </span>
                    </p>
                </div>
                <div class="my-8">
                    <h1 class="text-2xl text-gray-800 font-bold tracking-wide leading-none ">Abstract</h1>
                    <div class="text-justify my-2">{!! $article->abstract !!}</div>
                </div>

                <div class="my-8 bg-gray-200 px-10 py-8">
                    <h4 class="text-gray-700 text-xl font-bold tracking-wide">How to cite this article:</h4>
                    <div class="text-justify my-2 text-gray-800">
                         {!! $article->cite !!}
                    </div>

                    <div class="mt-2">
                        <span class="font-bold text-blue-900 tracking-wider">DOI:</span> <a href="{{ $article->doi_link }}" class="underline text-blue-700 hover:no-underline hover:text-blue-800 pl-1">{{ $article->doi }}</a>
                    </div>
                    <div>
                        <span class="font-bold text-blue-900 tracking-wider">URL:</span> <a href="#" class="underline text-blue-700 hover:no-underline hover:text-blue-800 pl-1">{{ url()->current() }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
