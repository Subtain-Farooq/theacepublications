@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.components.shared.header')
    @if(session('alert'))
        @component('backend.layouts.components.shared.alert', ['color' => session('color')])
            {{ session('message') }}
        @endcomponent
    @endif
<div class="">
    <div class="p-8 bg-white rounded">
        <h2 class="text-2xl rounded mt-5 text-white bg-blue-500 px-4 py-2">
            {{ $invoice->manuscript->title }}
        </h2>

        <div class="flex -mx-3">
            <div class="w-1/2 px-3 my-4">
                <div class="border rounded p-5">
                    <h1 class="text-xl font-bold tracking-wide mb-4">Manuscript Detail</h1>
                    <div class="flex justify-between my-1">
                        <span>Manuscript Code</span> <span class="font-bold tracking-wide">{{ $invoice->manuscript->code }}</span>
                    </div>
                    <div class="flex justify-between my-1">
                        <span>Status of Manuscript</span> <span class="capitalize font-bold tracking-wide">{{ $invoice->manuscript->status }}</span>
                    </div>
                    <div class="flex justify-between my-1">
                        <span>Submitted Date</span> <span class="capitalize font-bold tracking-wide">{{ $invoice->manuscript->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div><div class="w-1/2 px-3 my-4">
                <div class="border rounded p-5">
                    <h1 class="text-xl font-bold tracking-wide mb-4">Invoice Detail</h1>
                    <div class="flex justify-between my-1">
                        <span>Invoice Code</span> <span class="font-bold tracking-wide">{{ $invoice->invoice_number }}</span>
                    </div>
                    <div class="flex justify-between my-1">
                        <span>Status of Manuscript</span> <span class="capitalize font-bold tracking-wide">{{ $invoice->status }}</span>
                    </div>
                    <div class="flex justify-between my-1">
                        <span>Generated Date</span> <span class="capitalize font-bold tracking-wide">{{ $invoice->generated_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex -mx-3">
            <div class="w-1/2 px-3 my-2">

            </div><div class="w-1/2 px-3 my-2">
                <div class="border rounded p-5">
                    <h1 class="text-xl font-bold tracking-wide mb-4">Amount Detail</h1>

                    @if($invoice->amount == 350)
                        <div class="flex justify-between my-1">
                            <span>Standard Publish</span> <span class="font-bold tracking-wide">${{ $invoice->amount }}</span>
                        </div>

                    @elseif($invoice->amount == 500)
                        <div class="flex justify-between my-1">
                            <span>Standard Publish</span> <span class="font-bold tracking-wide">$350</span>
                        </div>
                        <div class="flex justify-between my-1">
                            <span>Hard Copy + Reprints + Delivery Charges</span> <span class="font-bold tracking-wide">$150</span>
                        </div>

                    @else
                        <div class="flex justify-center my-1">
                            <span class="text-red-500 text-xl">Invoice not Generated</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <button class="bg-blue-600 px-5 py-2 rounded text-white hover:bg-blue-700">Download Invoice</button>
    </div>
</div>
@endsection
