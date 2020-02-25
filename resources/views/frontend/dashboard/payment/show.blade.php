@extends('frontend.layouts.dashboard')

@section('dashboard-content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            @if(Session::has('alert'))
                @component('frontend.layouts.shared.alert', ['alert' => 'green'])
                    {{ Session::get('message') }}
                @endcomponent
            @endif


            <div class="border mt-8 mb-16">

                @if($invoice)
                    <div class="flex justify-between items-center  bg-gray-200 px-8 py-6">
                        <h1 class="text-blue-800 text-justify text-2xl tracking-wide">{{ $invoice->manuscript->title }}</h1>
                    </div>

                <div class="px-8">
                    <div class="mt-4">
                        <div class="flex flex-wrap overflow-hidden -mx-5">
                            <div class="w-1/2 px-5 py-2">
                                <div class="py-4">
                                    <h2 class="text-xl text-blue-800 font-bold tracking-wide mb-4">Manuscript Detail</h2>
                                    <div class="flex justify-between my-2">
                                        <label>Manuscript Code</label>
                                        <span class="font-bold">{{ $invoice->manuscript->code }}</span>
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <label>Status of Manuscript</label>
                                        <span class="font-bold capitalize">{{ $invoice->manuscript->status }}</span>
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <label>Submitted Date</label>
                                        <span class="font-bold capitalize">{{ $invoice->manuscript->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 px-5 py-2">
                                <div class="py-4">
                                    <h2 class="text-xl text-blue-800 font-bold tracking-wide mb-4">Invoice Detail</h2>
                                    <div class="flex justify-between my-2">
                                        <label>Invoice Number</label>
                                        <span class="font-bold">{{ $invoice->invoice_number }}</span>
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <label>Amount Status</label>
                                        <span class="font-bold capitalize">{{ $invoice->status }}</span>
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <label>Generated Date</label>
                                        <span class="font-bold capitalize">{{ $invoice->generated_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-5">
                        <div class="flex flex-wrap overflow-hidden -mx-3">
                            <div class="w-1/2 px-3 py-2">

                            </div>
                            <div class="w-1/2 px-3 py-2">

                                @if(is_null($invoice->amount))
                                    <form method="POST" name="listForm" action="{{ route('invoice.update', ['id' => $invoice->id]) }}">
                                        @csrf
                                        <div class="py-4">
                                            <h2 class="text-xl text-red-600 mb-4 bg-gray-400 px-4 py-2">Amount Detail</h2>
                                            <div class="px-2">
                                                <div class="flex justify-between my-2">
                                                    <label>Standard Publication Charges</label>
                                                    <span class="font-bold">$350</span>
                                                </div>
                                                <div class="flex justify-between my-2">
                                                    <label class="custom-label flex items-center cursor-pointer">
                                                        <div class="flex justify-center h-5 w-5 bg-white border border-gray-300 mr-2">
                                                            <input type="checkbox" value="150" name="choice" id="choice"  onchange="checkTotal()" class="hidden" >
                                                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                                                        </div>
                                                        <span class="select-none">Hard Copy + Reprints + Delivery Charges</span>
                                                    </label>
                                                    <span class="font-bold capitalize">$150</span>
                                                </div>
                                            </div>
                                            <div class="flex justify-between mb-2 mt-5 border px-4 py-2">
                                                <label class="text-teal-700">Total Amount</label>
                                                <span class="font-bold capitalize flex">
                                                $<input class="appearance-none w-6 font-bold bg-transparent text-right" id="total" value="350">
                                            </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="bg-blue-700 px-5 py-2 text-white rounded-sm hover:bg-blue-800">Submit</button>
                                    </form>
                                @else
                                    <div class="py-4">
                                        <h2 class="text-xl text-red-600 mb-4 bg-gray-400 px-4 py-2">Amount Detail</h2>
                                        <div class="px-2">
                                            <div class="flex justify-between my-2">
                                                <label>Standard Publication Charges</label>
                                                <span class="font-bold">$350</span>
                                            </div>
                                            @if($invoice->amount == 500)
                                            <div class="flex justify-between my-2">
                                                <label class="custom-label flex items-center cursor-pointer">
                                                 Hard Copy + Reprints + Delivery Charges
                                                </label>
                                                <span class="font-bold capitalize">150</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="flex justify-between mb-2 mt-5 border px-4 py-2">
                                            <label class="text-teal-700">Total Amount</label>
                                            <span class="font-bold capitalize flex">
                                                ${{ $invoice->amount }}
                                            </span>
                                        </div>
                                        <a href="{{ route('invoice.download', ['id' => $invoice->manuscript->id]) }}" class="inline-block bg-green-600 px-6 py-2 mt-4 text-white">Download</a>
                                    </div>
                                @endif

                            </div>
                        </div>
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

    <script type="text/javascript">
        function checkTotal() {
            document.listForm.total.value = 350;
            var sum = 350;

                if (document.getElementById('choice').checked) {
                    sum = sum + parseInt(document.getElementById('choice').value);
                }

            document.getElementById('total').value = sum;
        }
    </script>
@endsection
