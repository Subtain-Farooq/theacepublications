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
                            <div class="font-bold">Name</div> {{ $manuscript->user->name }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Email</div> {{ $manuscript->user->email }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Mobile Number</div> {{ $manuscript->user->mobile_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Fax Number</div> {{ $manuscript->user->fax_number }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Country Name</div> {{ $manuscript->user->country->name }}
                        </div>
                    </div>

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Registered At</div> {{ $manuscript->user->created_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Last Login At</div> {{ $manuscript->user->last_login_at->format('M d Y') }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            @if($manuscript->user->status)
                                <span class="text-green-500">Active</span>
                            @else
                                <span class="text-orange-600">No Active</span>
                            @endif
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Live DNA</div>
                            @if(!is_null($manuscript->user->live_dna))
                                {{ $manuscript->user->live_dna }}
                            @else
                                <span class="text-red-500">Not Entered</span>
                            @endif
                        </div>

                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Scopus ID</div>
                            @if(!is_null($manuscript->user->scopus))
                                {{ $manuscript->user->scopus }}
                            @else
                                <span class="text-red-500">Not Entered</span>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Manuscript <span class="font-bold tracking-wide">{{ $manuscript->code }}</span> Detail</h3>
            </div>

            <div class="w-full border p-8 rounded">
                <div class="flex flex-wrap overflow-hidden md:-mx-3 lg:-mx-3 xl:-mx-3">
                    <div class="w-full px-3 mb-5">
                        <div class="flex px-2 py-2 hover:bg-gray-100">
                            <label class="w-64 font-bold">Manuscript Name</label>
                            <h1 class="w-full text-justify">
                                {{ $manuscript->title }}
                            </h1>
                        </div>

                        <div class="flex px-2 py-2 hover:bg-gray-100">
                            <label class="w-64 font-bold">Abstract</label>
                            <div class="w-full text-justify">
                                {{ $manuscript->abstract }}
                            </div>
                        </div>
                    </div>


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
                            <div class="font-bold">Manuscript Code</div> {{ $manuscript->code }}
                        </div>

                    </div>

                    <div class="w-full overflow-hidden md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2">
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Authors</div> {{ $manuscript->authors }}
                        </div>
                        <div class="flex justify-between px-2 py-2 hover:bg-gray-100">
                            <div class="font-bold">Status</div>
                            {{ $manuscript->status }}
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

    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Status of <span class="font-bold tracking-wide">({{ $manuscript->code }})</span> Manuscript. </h3>
            </div>
            <div class="flex -mx-3">
                <div class="w-1/2 px-3">
                    <div class="flex justify-between p-12 border rounded">
                        <label>Manuscript Status</label>
                        <p class="capitalize">{{ $manuscript->status }}</p>
                    </div>
                </div>
                <div class="w-1/2 px-3">
                    <div class="flex justify-between p-12 border rounded">
                        <label>Payment status of Manuscript</label>
                        <p class="capitalize">
                            @if(isset($manuscript->invoice))
                                <span class="capitalize">
                                    {{ $manuscript->invoice->status }}
                                </span>
                            @else
                                <span class="text-red-500">No invoice genrated</span>
                            @endif
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded mt-5">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Update status of <span class="font-bold tracking-wide">({{ $manuscript->code }})</span> Manuscript. </h3>
            </div>
            <div class="w-full border p-8 rounded">
                <form method="POST" action="{{ route('console.manuscripts.update', ['id' => $manuscript->id]) }}">
                    @csrf
                    <div class="flex flex-wrap overflow-hidden">
                        <div class="w-1/5">
                            <label>Manuscript Status</label>
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

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="withdraw" name="status" class="opacity-0 absolute " @if($manuscript->status == 'withdraw') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Withdraw</div>
                            </label>

                            <label class="flex justify-start items-start mr-4">
                                <div class="bg-white border-2 rounded-full border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="radio" value="published" name="status" class="opacity-0 absolute " @if($manuscript->status == 'published') checked  @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Published</div>
                            </label>

                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-wrap overflow-hidden mt-8">
                        <div class="w-1/5">
                            <label>Payment Status</label>
                        </div>
                        <div class="w-4/5 flex">



                            @if(!isset($manuscript->invoice->status) && $manuscript->status != 'rejected')
                                <label class="flex justify-start items-start mr-4">
                                    <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                        <input type="checkbox" value="pending" name="payment" class="opacity-0 absolute " @if($manuscript->invoice == 'pending') checked  @endif>
                                        <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                    </div>
                                    <div class="select-none">Generate Invoice</div>
                                </label>
                            @elseif(isset($manuscript->invoice->status) && $manuscript->invoice->status == 'pending')
                                <label class="flex justify-start items-start mr-4">
                                    <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                        <input type="checkbox" value="paid" name="payment" class="opacity-0 absolute " @if($manuscript->invoice == 'paid') checked  @endif>
                                        <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                    </div>
                                    <div class="select-none">Payment Paid</div>
                                </label>
                            @endif

                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                   {{-- <div class="flex flex-wrap overflow-hidden mt-5">
                        <div class="w-1/5">
                            <label>Status of Manuscript</label>
                        </div>
                        <div class="w-4/5 flex">
                            <textarea>

                            </textarea>

                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>--}}



                    <div class="flex justify-end mt-10 -mx-1">
                        <button type="submit" class="inline-block bg-green-400 px-5 py-2 rounded capitalize mx-1 hover:bg-green-500">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="bg-white p-8 rounded mt-5">
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
    </div>

@endsection
