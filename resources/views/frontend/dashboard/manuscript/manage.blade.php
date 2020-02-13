@extends('frontend.layouts.dashboard')

@section('dashboard-content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            @if(Session::has('alert'))
                @component('frontend.layouts.shared.alert', ['alert' => 'green'])
                    {{ Session::get('message') }}
                @endcomponent
            @endif
            <div class="border mb-16 mt-6 px-10 py-8">
                <div class="flex justify-between items-center mb-5">
                    <h1 class="text-blue-900 text-4xl font-bold tracking-wide">Manuscript Management</h1>

                </div>
                <div class="mt-2">
                    <div class="flex flex-wrap overflow-hidden">
                        <table class="border w-full">
                            <thead>
                            <tr>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Sr No.</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Title</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Code</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Reason</th>

                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Submitted Date</th>
                               {{-- <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->manuscripts as $manuscript)
                                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Sr No.</span>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                                        {{ $manuscript->title }}
                                    </td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                                        {{ $manuscript->code }}
                                    </td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                        @if($manuscript->status == 'submitted' || $manuscript->status == 'in review' || $manuscript->status == 'review in progress')
                                            <span class="rounded capitalize bg-teal-200 py-1 px-3 text-xs font-bold">{{ $manuscript->status }}</span>
                                        @elseif($manuscript->status == 'payment awaited')
                                            <span class="rounded capitalize  bg-orange-200 py-1 px-3 text-xs font-bold">{{ $manuscript->status }}</span>
                                        @elseif($manuscript->status == 'rejected')
                                            <span class="rounded capitalize bg-red-200 py-1 px-3 text-xs font-bold">{{ $manuscript->status }}</span>
                                        @elseif($manuscript->status == 'accepted')
                                            <span class="rounded capitalize bg-green-200 py-1 px-3 text-xs font-bold">{{ $manuscript->status }}</span>
                                        @endif
                                    </td>

                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                                        @if($manuscript->status == 'rejected')
                                            {{ $manuscript->reason }}
                                        @endif
                                    </td>

                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Submitted Dated</span>
                                        {{ $manuscript->created_at->toFormattedDateString()  }}
                                    </td>

                                    {{--<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                                        <a href="{{ route('manuscript.manage.show', $manuscript->id) }}" class="text-green-400 hover:text-green-600 mx-1 hover:underline">View</a>
                                        --}}{{--<a href="#" class="text-blue-400 hover:text-blue-600 mx-1 hover:underline">Edit</a>
                                        <a href="#" class="text-red-400 hover:text-red-600 mx-1 hover:underline">Delete</a>--}}{{--
                                    </td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
