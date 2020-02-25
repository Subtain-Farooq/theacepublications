@extends('frontend.layouts.dashboard')

@section('dashboard-content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            @if(Session::has('alert'))
                @component('frontend.layouts.shared.alert', ['alert' => 'green'])
                    {{ Session::get('message') }}
                @endcomponent
            @endif


            <div class="mb-16 mt-6">

                @if($manuscripts->isNotEmpty())

                <div class="flex justify-between items-center mb-5">
                    <h1 class="text-blue-800 text-3xl">Invoice Management</h1>
                </div>
                <div class="mt-2">
                    <div class="flex flex-wrap overflow-hidden">
                        <table class="border w-full">
                            <thead>
                            <tr>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Sr #.</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Manuscript Code</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Invoice No</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Amount</th>

                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Generated Date</th>
                                 <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($manuscripts as $manuscript)
                                @if($manuscript->invoice)
                                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Sr No.</span>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Manuscript Code</span>
                                            {{ $manuscript->code }}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Invoice No</span>
                                            {{ $manuscript->invoice->invoice_number }}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                            <span class="capitalize">
                                                {{ $manuscript->invoice->status }}
                                            </span>
                                        </td>

                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Amount</span>
                                            @if($manuscript->invoice->amount)
                                                {{ $manuscript->invoice->amount }}

                                            @else
                                                <a href="{{ route('invoice.show', ['id' => $manuscript->id ]) }}" class="text-red-400 hover:text-red-600 mx-1 hover:underline">Select Publication Type</a>
                                            @endif
                                        </td>

                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Generated Dated</span>
                                            {{ $manuscript->invoice->generated_at->format('18 M Y') }}
                                        </td>

                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                                            <a href="{{ route('invoice.show', ['id' => $manuscript->id ]) }}" class="text-teal-600 hover:text-teal-700 mx-1 hover:underline">Details</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                    <div class="flex items-center justify-center">
                        <p class="text-3xl p-8">No Invoice Generated</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
