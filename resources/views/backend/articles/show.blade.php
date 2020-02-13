@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">

            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif

            <div class="flex justify-between items-center">
                <h1 class="text-3xl mb-5">Article Detail</h1>

                <a href="{{ route('console.articles.edit', ['id' => $article->id]) }}" class="text-blue-600 text-xl mr-2 hover:text-red-600">Edit</a>
            </div>

            <div class="border rounded px-12 py-8">
                <div class="flex flex-wrap items-center overflow-hidden -mx-2">

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Title:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <h1 class="text-lg">{{ $article->title }}</h1>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Authors:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{{ $article->authors }}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Code:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{{ $article->code }}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Status:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        @if($article->status == 'published')
                            <span class="bg-green-400 px-4 py-1 rounded-full">Published</span>
                        @else
                            <span class="bg-orange-400 px-4 py-1 rounded-full">Draft</span>
                        @endif
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">DOI:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{{ $article->doi }}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">DOI Link:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{{ $article->doi_link }}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Page Numbers:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{{ $article->pages }}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Abstract:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{!! $article->abstract !!}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Cite:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p class="text-lg">{!! $article->cite !!}</p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Download File:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3 py-4">
                        <div>
                            <a href="{{ url($article->document->path. $article->document->name) }}" class="border-2 border-blue-800 rounded px-6 py-2 tracking-wider text-lg font-bold text-blue-800 hover:bg-blue-800 hover:text-white" download>Download Article</a>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>


    <div class="bg-white p-6 rounded my-8">
        <div class="w-full">

            <h1 class="text-3xl mb-5">Issue Detail</h1>

            <div class="border rounded px-12 py-8">
                <div class="flex flex-wrap items-center overflow-hidden -mx-2">

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Journal:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        @if(!is_null($article->currentIssue))
                            <p class="text-lg">{{ $article->currentIssue->journal->name }}</p>
                        @elseif(!is_null($article->archive))
                            <p class="text-lg">{{ $article->archive->journal->name }}</p>
                        @endif
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Issue Status:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        <p>
                            @if(!is_null($article->currentIssue))
                                <span class="text-green-600">In Current Issue</span>
                            @elseif(!is_null($article->archive))
                                <span class="text-orange-600">In Archived</span>
                            @endif
                        </p>
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Issue Number:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        @if(!is_null($article->currentIssue))
                            <p class="text-lg">{{ $article->currentIssue->issue_number }}</p>
                        @elseif(!is_null($article->archive))
                            <p class="text-lg">{{ $article->archive->issue_number }}</p>
                        @endif

                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Volume:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        @if(!is_null($article->currentIssue))
                            <p class="text-lg">{{ $article->currentIssue->volume }}</p>
                        @elseif(!is_null($article->archive))
                            <p class="text-lg">{{ $article->archive->volume }}</p>
                        @endif
                    </div>

                    <div class="w-3/12 px-2 overflow-hidden my-3">
                        <label class="text-lg font-bold">Year:</label>
                    </div>
                    <div class="w-9/12 px-2 overflow-hidden my-3">
                        @if(!is_null($article->currentIssue))
                            <p class="text-lg">{{ $article->currentIssue->year }}</p>
                        @elseif(!is_null($article->archive))
                            <p class="text-lg">{{ $article->archive->year }}</p>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
