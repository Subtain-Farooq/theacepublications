@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded mb-5">
        <div class="flex -mx-2">
            <div class="w-1/2 px-2">
                <div class="border p-5">
                    <h3 class="text-black text-2xl">Disable the Reviewer</h3>
                    <form method="POST" action="{{ route('console.reviewer.update', ['id' => $reviewer->id]) }}">
                        @csrf
                        <div class="flex items-center my-5">

                            <label class="flex justify-start items-center cursor-pointer">
                                <div class="bg-white border rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="checkbox" name="status" class="opacity-0 absolute" value="1" @if($reviewer->status) checked @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Active</div><span class="text-sm text-red-600 ml-2">( Tick the check box to make status <span class="font-bold tracking-wide">Active</span> OR leave it unchecked to make status Disabled.)</span>
                            </label>
                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="inline-block bg-indigo-400 px-5 py-1 rounded capitalize mx-1 hover:bg-indigo-600 hover:text-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="border p-5">
                    <h3 class="text-red-600 text-2xl">Delete the Reviewer</h3>
                    <div class="flex items-center my-5">

                        <p class="text-lg">This user is deleted permanently.</p>
                        @error('status')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror

                    </div>
                    <form method="POST" action="{{ route('console.reviewer.destroy', ['id' => $reviewer->id]) }}">
                        @csrf
                        <div class="flex justify-end">
                            <button type="submit" class="inline-block bg-red-400 px-5 py-1 rounded capitalize mx-1 hover:bg-red-600 hover:text-white">Delete</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Reviewer Detail</h3>
            </div>
            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-3 xl:-mx-3">
                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2  xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Name</div> {{ $reviewer->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Email</div> {{ $reviewer->email }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Contact Number</div> {{ $reviewer->contact_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Country Name</div> {{ $reviewer->country->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Address</div> {{ $reviewer->address }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Highest Degree</div> {{ $reviewer->degree }}
                        </div>

                    </div>
                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Registered At</div> {{ $reviewer->created_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            @if($reviewer->status)
                                <span class="bg-green-600 px-2 text-white rounded">Active</span>
                            @else
                                <span class="bg-orange-500 px-2 text-white rounded">No Active</span>
                            @endif
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Digital Identifier</div>
                            @if(!is_null($reviewer->identifier))
                                {{ $reviewer->identifier }}
                            @else
                                <span class="text-red-500">No Data</span>
                            @endif
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Job Type</div> {{ $reviewer->job_type }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Keywords</div> {{ $reviewer->keywords }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
