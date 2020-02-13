@extends('backend.layouts.app')

@section('content')



    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="">
                <h3 class="text-2xl mb-3">All Categories</h3>
            </div>
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                  {{ session('message') }}
                @endcomponent
            @endif

            @if($categories->isNotEmpty())
                <table class="w-full border">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $category->name }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if($category->status)
                                        <span class="inline-block text-sm bg-green-300 px-3 rounded-full">
                                        Active
                                    </span>
                                    @else
                                        <span class="inline-block text-sm bg-red-300 px-3 rounded-full">
                                        Disabled
                                    </span>
                                    @endif
                                </div>
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    <a href="{{ route('console.categories.edit', ['id' => $category->id] ) }}" class="text-green-500 mx-2 hover:underline">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('console.categories.destroy', ['id' => $category->id]) }}">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-2 hover:underline">Delete</button>
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


@section('script')


@endsection
