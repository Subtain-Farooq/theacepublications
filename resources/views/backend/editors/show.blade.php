@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Edit Editor</h3>
            </div>

            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-3 xl:-mx-3">

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2  xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Name</div> {{ $editor->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Email</div> {{ $editor->email }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Contact Number</div> {{ $editor->contact_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Departmental Address</div> {{ $editor->departmental_address }}
                        </div>
                    </div>

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Country</div> {{ $editor->country->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            @if($editor->status)
                                <span class="text-green-500">Active</span>
                            @else
                                <span class="text-orange-600">No Active</span>
                            @endif
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Created At</div> {{ $editor->created_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Updated At</div> {{ $editor->updated_at->format('M d Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white p-8 rounded mt-8">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Assigned Journals</h3>
            </div>
            @if($editor->journals->isNotEmpty())
                <table class="w-full border">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 w-20">Sr No.</th>
                        <th class="px-4 py-2">Journals Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($editor->journals as $journal)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 w-20 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2 capitalize">{{ $journal->name }}</td>
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


            {{--        <div class="border rounded px-10 py-6 my-5">
                        <div class="">
                            <div class="w-full">
                                <div class="">
                                    <form method="POST" action="{{ route('console.editors.relation', ['id' => $editor->id]) }}" class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1 xl:-mx-1">
                                        @csrf
                                        @foreach($journals as $journal)
                                            <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                                                <div class="">
                                                    <label class="block py-1">
                                                        <input name="journals[]" type="checkbox"
                                                               @foreach ($journal->editors as $item)
                                                               @if($editor->id == $item->id)
                                                               checked
                                                               @endif
                                                               @endforeach  class="mr-1" value="{{ $journal->id }}">

                                                        {{ $journal->name }}

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
                    </div>--}}

        </div>
    </div>
@endsection
