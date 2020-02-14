@extends('backend.layouts.app')

@section('content')

@include('backend.layouts.components.shared.header')

<div class="bg-white p-8 rounded">
    <div class="w-full">
        <div class="flex justify-between">
            <h3 class="text-2xl mb-4">Add New Editor</h3>
        </div>
        <div class="w-full border px-8 py-10 rounded">
            <form class="w-full -my-3" method="POST" action="{{ route('console.editors.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Select Country</label>
                    </div>
                    <div class="w-4/5">
                        <div class="relative">
                            <select  name="country"  class="w-full border appearance-none px-4 py-2 rounded focus:outline-none @error('country') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('country')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Full Name</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Email Address</label>
                    </div>
                    <div class="w-4/5">
                        <input type="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none @error('email') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Contact Number</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="contact_number" class="w-full px-4 py-2 border rounded focus:outline-none @error('contact_number') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('contact_number') }}">
                        @error('contact_number')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Departmental Address</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="departmental_address" class="w-full px-4 py-2 border rounded focus:outline-none @error('departmental_address') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('departmental_address') }}">
                        @error('departmental_address')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Image</label>
                    </div>
                    <div class="w-4/5">
                        <input type="file" name="image" class="w-full px-4 py-2 border rounded focus:outline-none @error('image') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('image') }}">
                        @error('image')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-5">
                    <div class="w-1/5">
                        <label>Status of Editor</label>
                    </div>
                    <div class="w-4/5">
                        <label class="flex justify-start items-center cursor-pointer">
                            <div class="bg-white border rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                <input type="checkbox" name="status" class="opacity-0 absolute" value="1">
                                <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            </div>
                            <div class="select-none">Active</div><span class="text-sm text-red-600 ml-2">( Tick the check box to make status <span class="font-bold tracking-wide">Active</span> OR leave it unchecked to make status Disabled.)</span>
                        </label>
                        @error('status')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center mt-10 mb-2 -mx-1">
                    <button type="submit" class="inline-block bg-blue-400 px-5 py-2 rounded capitalize mx-1 hover:bg-blue-500">Save</button>
                    <a href="{{ route('console.editors')}}" class="inline-block bg-red-400 px-5 py-2 rounded capitalize mx-1 hover:bg-red-500">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
