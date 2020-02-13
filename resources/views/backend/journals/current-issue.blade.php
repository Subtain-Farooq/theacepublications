@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.components.shared.header')
    <div class="bg-white p-6 rounded">
        <div class="w-full">
            <div class="">
                <h3 class="text-2xl mb-3">Current Issue</h3>
            </div>
            @if(session('alert'))
                @component('backend.layouts.components.shared.alert', ['color' => session('color')])
                    {{ session('message') }}
                @endcomponent
            @endif
            <table class="w-full border my-5">
                <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Journals Name</th>
                    <th class="px-4 py-2">Year</th>
                    <th class="px-4 py-2">Volume</th>
                    <th class="px-4 py-2">Current Issue Number</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="border px-4 py-2 capitalize">{{ $journal->name }}</td>
                        <td class="border px-4 py-2 capitalize">
                            @if(isset($journal->currentIssue->year))
                                {{ $journal->currentIssue->year }}
                            @else
                                <span class="text-red-600">No Current Issue assigned</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2 capitalize">
                            @if(isset($journal->currentIssue->volume))
                                {{ $journal->currentIssue->volume }}
                            @else
                                <span class="text-red-600">No Current Issue assigned</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2 capitalize">
                            @if(isset($journal->currentIssue->issue_number))
                            {{ $journal->currentIssue->issue_number }}
                                @else
                                <span class="text-red-600">No Current Issue assigned</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-2xl mb-3">Assign Current Issue</h3>
            <div class="px-10 py-8 border rounded">
                <form method="POST" action="{{ route('console.journal.current-issue.change', ['id'=> $journal->id]) }}" class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1 xl:-mx-1">
                    @csrf

                    @for($i=1; $i<=24; $i++)
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/5">
                            <div class="">
                                <label class="block py-1">
                                    <input name="issue" type="radio"  class="mr-1" value="{{ $i }}"
                                        @if(isset($journal->currentIssue->issue_number))
                                            @if($journal->currentIssue->issue_number == $i)
                                                checked
                                           @endif
                                        @endif

                                     required>
                                    Issue {{ $i }}
                                </label>
                            </div>
                        </div>
                    @endfor

                    <div class="flex w-full items-center mt-5 mb-2 -mx-1">
                        <button type="submit" class="inline-block bg-blue-400 px-5 py-2 rounded capitalize mx-1 hover:bg-blue-500">Change</button>
                        <a href="{{ route('console.journals') }}" class="inline-block bg-red-400 px-5 py-2 rounded capitalize mx-1 hover:bg-red-500">Cancel</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection

