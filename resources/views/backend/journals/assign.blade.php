@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Update Assigned Categories to Journal</h3>
            </div>

            <div class="bg-white p-8 rounded">
                <div class="w-full">
                    @if($journal->categories->isNotEmpty())
                        <div class="flex justify-between">
                            <h3 class="text-2xl mb-4">Assigned Categories</h3>
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


                    <div class="border rounded px-10 py-6 my-5">
                        <div class="">
                            <div class="w-full">
                                <div class="">
                                    <form method="POST" action="{{ route('console.journal.category.relation', ['id' => $journal->id]) }}" class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1 xl:-mx-1">
                                        @csrf
                                        @foreach($categories as $category)
                                            <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                                                <div class="">
                                                    <label class="block py-1">
                                                        <input name="categories[]" type="checkbox"
                                                               @foreach ($category->journals as $item)
                                                               @if($journal->id == $item->id)
                                                               checked
                                                               @endif
                                                               @endforeach  class="mr-1" value="{{ $category->id }}">

                                                        {{ $category->name }}

                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="flex items-center mt-5 mb-2 -mx-1">
                                            <button type="submit" class="inline-block bg-blue-400 px-5 py-2 rounded capitalize mx-1 hover:bg-blue-500">Update</button>
                                        </div>
                                    </form>
                                </div>
                                @error('country')
                                <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
