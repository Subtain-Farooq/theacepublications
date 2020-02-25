@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="">
        <div class="w-full">
            {{-- <div class="">
                <h3 class="text-2xl mb-3">Deleted Editors</h3>
            </div> --}}
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
                        <th class="px-4 py-2">Assigned to Journals</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
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

                                    <form class="inline" method="POST" action="{{ route('console.editors.restore', ['id' => $editor->id] ) }}">
                                        @csrf
                                        <button type="submit" class="text-green-600 mx-2 hover:underline">Recover</button>
                                    </form>


                                    <form class="inline" method="POST" action="{{ route('console.editors.delete', ['id' => $editor->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Permanently Delete</button>
                                    </form>
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
