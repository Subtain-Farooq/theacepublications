@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">User Detail</h3>
            </div>

            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-3 xl:-mx-3">

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2  xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Name</div> {{ $user->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Email</div> {{ $user->email }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Mobile Number</div> {{ $user->mobile_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Fax Number</div> {{ $user->fax_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Country Name</div> {{ $user->country->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Email Verified</div>
                            @if(!is_null($user->email_verified_at))
                                <span class="bg-green-600 px-2 rounded text-white">Verified</span>
                            @else
                                <span class="bg-red-600 px-2 rounded text-white">Not Verified</span>
                            @endif
                        </div>
                    </div>

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Registered At</div> {{ $user->created_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Last Login At</div> {{ $user->last_login_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            @if($user->status)
                                <span class="bg-green-600 px-2 text-white rounded">Active</span>
                            @else
                                <span class="text-orange-600">No Active</span>
                            @endif
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Live DNA</div>
                            @if(!is_null($user->live_dna))
                                {{ $user->live_dna }}
                            @else
                                <span class="text-red-500">Not Entered</span>
                            @endif
                        </div>

                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Scopus ID</div>
                            @if(!is_null($user->scopus))
                                {{ $user->scopus }}
                            @else
                                <span class="text-red-500">Not Entered</span>
                            @endif
                        </div>

                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">No. of Submitted Manuscripts</div>
                            {{ $user->manuscripts->count() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@foreach($user->manuscripts as $manuscript)

    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">{{ $loop->iteration }} - Manuscript <span class="font-bold tracking-wide">{{ $manuscript->code }}</span> Detail</h3>
            </div>

            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-3 xl:-mx-3">

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2  xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Journal Name</div> {{ $manuscript->journal->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Journal ISSN</div> {{ $manuscript->journal->issn }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Manuscript Type</div> {{ $manuscript->type->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Manuscript Name</div> {{ $manuscript->title }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Manuscript Code</div> {{ $manuscript->code }}
                        </div>

                    </div>

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Abstract</div> {{ $manuscript->abstract }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Authors</div> {{ $manuscript->authors }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            <span class="capitalize bg-indigo-500 px-2 rounded text-white">
                            {{ $manuscript->status }}
                            </span>
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Uploaded at</div>
                            {{ $manuscript->created_at->format('M d Y') }}
                        </div>

                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Reason if rejected</div>
                            @if(!is_null($manuscript->reason))
                                {{ $manuscript->reason }}
                            @else
                                <span class="text-green-500">Not Rejected</span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach




{{--
    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Change status of {{ $manuscript->title }} <span class="font-bold tracking-wide">({{ $manuscript->code }})</span> Manuscript. </h3>
            </div>
            <div class="w-full border p-8 rounded">
                <form method="POST" action="{{ route('console.manuscripts.update', ['id' => $manuscript->id]) }}">
                    @csrf
                    <div class="flex flex-wrap overflow-hidden">
                        <div class="w-1/5">
                            <label>Status of Manuscript</label>
                        </div>
                        <div class="w-4/5 flex">
                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="submitted" name="status" class="opacity-0 absolute" @if($manuscript->status == 'submitted') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Submitted</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="payment awaited" name="status" class="opacity-0 absolute " @if($manuscript->status == 'payment awaited') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Payment Awaited</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="in review" name="status" class="opacity-0 absolute " @if($manuscript->status == 'in review') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">In Review</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="review in progress" name="status" class="opacity-0 absolute " @if($manuscript->status == 'review in progress') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Review in Progress</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="accepted" name="status" class="opacity-0 absolute " @if($manuscript->status == 'accepted') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Accepted</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="rejected" name="status" class="opacity-0 absolute " @if($manuscript->status == 'rejected') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Rejected</div>
                            </label>

                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-10 -mx-1">
                        <button type="submit" class="inline-block bg-green-400 px-5 py-2 rounded capitalize mx-1 hover:bg-green-500">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

--}}

   {{-- <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Manuscript <span class="font-bold tracking-wide">{{ $manuscript->code }}</span> Files to Download</h3>
            </div>
            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-gray-200 text-lg">
                            <th class="w-20 py-4">Sr No.</th>
                            <th class="px-4 py-4">File Name</th>
                            <th class="w-64 py-4">Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($manuscript->files as $file)
                            <tr class="hover:bg-gray-100">
                                <td class=" border text-center w-16">{{ $loop->iteration }}</td>
                                <td class=" border px-4 py-2">{{ $file->name }}</td>
                                <td class="w-64 border py-4">
                                    <div class="flex items-center justify-center">

                                        <a href="{{ url($file->path.$file->name ) }}" class="bg-blue-300 px-4 py-1 rounded hover:bg-blue-500" download="">Download</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>--}}

@endsection
