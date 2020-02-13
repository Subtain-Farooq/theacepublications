@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-2xl">Reviewer Detail</h3>
                <div>
                    <a href="{{ route('console.reviewer.edit', ['id' => $reviewer->id] ) }}" class="bg-green-400 px-4 py-2 rounded hover:bg-green-500">Edit</a>
                </div>
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
                            <div class="font-bold">Highest Degree</div>
                            {{ $reviewer->degree }}
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
                                <span class="bg-orange-500 px-2 text-white rounded">Not Active</span>
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
                            <div class="font-bold">Job Type</div>
                            {{ $reviewer->job_type }}
                        </div>


                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Keywords</div>
                            {{ $reviewer->keywords }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">CV</div>
                            <a href="{{ url($reviewer->cv->path.$reviewer->cv->name) }}" download class="bg-blue-600 px-2 py-1 text-white rounded hover:bg-blue-700">Download</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
