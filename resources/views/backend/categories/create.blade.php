@extends('backend.layouts.app')

@section('content')

@include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Add New Category</h3>
            </div>

            <div class="w-full border px-8 py-10 rounded">
                <form class="w-full -my-3" method="POST" action="{{ route('console.categories.store') }}">
                    @csrf
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Name of Category</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-5">
                        <div class="w-1/5">
                            <label>Status of Category</label>
                        </div>
                        <div class="w-4/5">
                            <label class="flex justify-start items-center cursor-pointer">
                                <div class="bg-white border rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="checkbox" name="status" class="opacity-0 absolute" value="1">
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Active</div><span class="text-sm text-red-600 ml-2">( Tick the check box to make status <span class="font-bold tracking-wide">Active</span>.)</span>
                            </label>
                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center mt-10 mb-2 -mx-1">
                        <button type="submit" class="inline-block bg-blue-400 px-5 py-2 rounded capitalize mx-1 hover:bg-blue-500">Save</button>
                        <a href="{{ route('console.categories')}}" class="inline-block bg-red-400 px-5 py-2 rounded capitalize mx-1 hover:bg-red-500">Cancel</a>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
