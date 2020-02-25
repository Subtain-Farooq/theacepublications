@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="">
        <div class="w-full">
            {{-- <div class="">
                <h3 class="text-2xl mb-3">All Articles</h3>
            </div> --}}
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif

            @if($articles->isNotEmpty())
                <table class="w-full border bg-white">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2 max-w-2xl">Title</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Issue</th>
                        <th class="px-4 py-2">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize max-w-2xl">{{ $article->title }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if($article->status == 'published')
                                        <span class="inline-block text-sm bg-green-300 px-3 rounded-full">
                                        Published
                                    </span>
                                    @else
                                        <span class="inline-block text-sm bg-red-300 px-3 rounded-full">
                                        Draft
                                    </span>
                                    @endif
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if(!is_null($article->currentIssue))
                                        Current Issue No. {{ $article->currentIssue->issue_number }}

                                    @elseif(!is_null($article->archive))
                                        Archived Issue No. {{ $article->archive->issue_number }}
                                    @endif

                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.articles.show', ['id' => $article->id] ) }}" class="text-blue-500 mx-2 hover:underline">View</a>
                                    <a href="{{ route('console.articles.edit', ['id' => $article->id] ) }}" class="text-green-500 mx-2 hover:underline">Edit</a>
                                    {{--<form class="inline" method="POST" action="{{ route('console.categories.destroy', ['id' => $article->id]) }}">
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
