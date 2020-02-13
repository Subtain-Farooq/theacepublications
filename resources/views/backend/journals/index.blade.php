@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="">
                <h3 class="text-2xl mb-3">All Journals</h3>
            </div>
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif

            @if($journals->isNotEmpty())
                <table class="w-full border">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">ISSN</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Current Issue / Volume / Year</th>
                        <th class="px-4 py-2">Action</th>
                        <th class="px-4 py-2">Categories</th>
                        <th class="px-4 py-2">Assign Issue</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($journals as $journal)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $journal->name }}</td>
                            <td class="border px-4 py-2 capitalize text-center">{{ $journal->issn }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if($journal->status == 'published')
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
                            <td class="border px-4 py-2 text-center">
                                @if(isset($journal->currentIssue))
                                    {{ $journal->currentIssue->issue_number }} /  {{ $journal->currentIssue->volume }} /  {{ $journal->currentIssue->year }}
                                @else
                                    <span class="text-red-600">No Current Issue</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.journals.show', ['id' => $journal->id] ) }}" class="text-blue-500 mx-2 hover:underline">View</a>
                                    <a href="{{ route('console.journals.edit', ['id' => $journal->id] ) }}" class="text-green-500 mx-2 hover:underline">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('console.journals.destroy', ['id' => $journal->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td class="border px-4 py-2 capitalize text-center">  <a href="{{ route('console.journal.category.relation.edit', ['id' => $journal->id] ) }}" class="text-blue-500 mx-2 hover:underline">Edit</a></td>
                            <td class="border px-4 py-2 capitalize text-center">  <a href="{{ route('console.journal.current-issue', ['id' => $journal->id] ) }}" class="text-purple-500 mx-2 hover:underline">Assign Issue</a></td>
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
