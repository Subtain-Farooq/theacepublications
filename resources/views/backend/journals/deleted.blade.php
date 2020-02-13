@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="">
                <h3 class="text-2xl mb-3">Deleted Journals</h3>
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
                        <th class="px-4 py-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($journals as $journal)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $journal->name }}</td>

                            <td class="border px-4 py-2">
                                <div class="flex justify-center">

                                    <form class="inline" method="POST" action="{{ route('console.journals.restore', ['id' => $journal->id] ) }}">
                                        @csrf
                                        <button type="submit" class="text-green-600 mx-2 hover:underline">Recover</button>
                                    </form>

{{--
                                    <form class="inline" method="POST" action="{{ route('console.editors.delete', ['id' => $journal->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Permanently Delete</button>
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
