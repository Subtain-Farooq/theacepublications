@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="">
                <h3 class="text-2xl mb-3">All Editors</h3>
            </div>
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif

            @if($editors->isNotEmpty())
                <table class="w-full border">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Assigned to Journal</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                        <th class="px-4 py-2">Assign Journals</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($editors as $editor)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $editor->name }}</td>
                            <td class="border px-4 py-2 text-center normal-case">
                               @if($editor->journals->isNotEmpty())

                               <span class="text-blue-600"> Assigned</span>
                                    {{-- @foreach($editor->journals as $journal)
                                        <span class="mx-1 my-1 block">
                                            {{ $journal->name }}
                                        </span>
                                    @endforeach --}}
                               @else
                                    <span class="text-red-600"> Not Assigned</span>
                               @endif

                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if($editor->status)
                                        <span class="inline-block text-sm bg-green-300 px-3 rounded-full">
                                        Active
                                    </span>
                                    @else
                                        <span class="inline-block text-sm bg-red-300 px-3 rounded-full">
                                        Not Active
                                    </span>
                                    @endif
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.editors.show', ['id' => $editor->id] ) }}" class="text-blue-500 mx-2 hover:underline">View</a>
                                    <a href="{{ route('console.editors.edit', ['id' => $editor->id] ) }}" class="text-green-500 mx-2 hover:underline">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('console.editors.destroy', ['id' => $editor->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.editors.relation.edit', ['id' => $editor->id] ) }}" class="text-indigo-700 mx-2 hover:underline">Assign</a>

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
