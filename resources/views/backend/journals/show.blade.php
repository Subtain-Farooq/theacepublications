@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between items-center mb-5 pb-2">
                <h3 class="text-4xl">{{ $journal->name }}</h3>
                <div>
                    <a href="{{ route('console.journals.edit', ['id' => $journal->id] ) }}" class="text-white bg-green-400 px-4 py-1 rounded mt-4 hover:bg-green-500">Edit</a>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col justify-between">
                    <ul>
                        <li class="text-lg my-1"><span class="font-bold text-gray-700">Frequency: </span> <span class="text-gray-700">{{ $journal->frequency }}</span></li>
                        <li class="text-lg my-1"><span class="font-bold text-gray-700">ISSN: </span> <span class="text-gray-700">{{ $journal->issn }}</span></li>
                        <li class="text-lg my-1"><span class="font-bold text-gray-700">Language: </span>English</li>
                    </ul>
                 {{--   <div>
                    <a href="{{ route('console.journals.edit', ['id' => $journal->id] ) }}" class="flex-grow bg-green-400 px-4 py-1 rounded mt-4 hover:bg-green-500">Edit this Journal</a>
                    </div>--}}
                </div>
                <div>
                    <img src="{{ url($journal->image->path.'/'.$journal->image->name) }}" class="border-2 w-40 object-left ">
                </div>
            </div>
            <div class="pt-5">
                <h2 class="text-2xl font-bold mb-1">Description</h2>
                <div class="text-justify">
                    {!! $journal->description !!}
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">

            <div class="bg-white rounded">
                <div class="w-full">
                    @if($journal->categories->isNotEmpty())
                        <div class="flex justify-between">
                            <h3 class="text-2xl mb-4">Assigned Categories to Journal</h3>
                        </div>
                        <table class="w-full border">
                            <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2 w-20">Sr No.</th>
                                <th class="px-4 py-2">Category Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($journal->categories as $category)
                                <tr class="hover:bg-gray-100">
                                    <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2 capitalize">{{ $category->name }}</td>
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

        </div>
    </div>
@endsection


@section('script')


@endsection
