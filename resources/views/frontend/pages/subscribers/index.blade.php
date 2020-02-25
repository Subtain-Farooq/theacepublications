@extends('frontend.layouts.app')

@section('content')
<div class="bg-white">
    <div class="container mx-auto px-4 my-12">
        <div class="py-2">
            <h1 class="text-2xl text-white  bg-blue-800 px-8 text-left inline-block mb-5">For Subscribers</h1>
            <div class="">
                <p class="my-1 text-justify">
                    ACE Publications provides a range of options to purchase our journals, from a subscription to an individual journal through to site-wide access to our entire online collection and customised consortia pricing. Pricing information for all our titles is available online
                    Institutional customers: If you are interested in an individual/institutional subscription please contact our sales office by email (<span class="text-blue-800 font-medium hover:underline">subscription@theacepublications.com</span>) or by phone on <span class="font-medium">+971 (56) 386 0507</span>.
                </p>
                <p class="my-4 text-justify text-lg font-medium text-red-600">
                    ACE Publications charge US $800 annually for each journal.
                </p>
            </div>
        </div>

        <div class="py-2">
            <h1 class="text-2xl text-blue-700 mb-2">Pay via Credit Card </h1>
            <div class="">
                <p class="text-justify">
                    For online transaction please click the link
                    <a class="text-blue-600 text-xl hover:underline" href="https://secure.telr.com/gateway/ql/MedwellPublications_7243.html" target="_blank">Pay Online</a>
                </p>
            </div>
        </div>

        <div class="py-2">
            <h1 class="text-2xl text-blue-700 mb-2">Pay via Bank to Bank</h1>

            <div class="">
                <div>
                    <div class="w-64 inline-block font-medium">Account No.</div>
                    <div class="inline-block">001520125604001</div>
                </div>
                <div>
                    <div class="w-64 inline-block font-medium">Bank Name & Address:</div>
                    <div class="inline-block">Dubai Islamic Bank, Al-Shola Building, Deira City Center, Deira, Dubai, UAE</div>
                </div>

                <div>
                    <div class="w-64 inline-block font-medium">Branch Code:</div>
                    <div class="inline-block">001</div>
                </div>

                <div>
                    <div class="w-64 inline-block font-medium">Swift Code:</div>
                    <div class="inline-block">DUIBAEAD</div>
                </div>

                <div>
                    <div class="w-64 inline-block font-medium">Account No.</div>
                    <div class="inline-block">001520125604001</div>
                </div>

                <div>
                    <div class="w-64 inline-block font-medium">IBAN</div>
                    <div class="inline-block">AE86 0240 0015 2012 5604 001</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
