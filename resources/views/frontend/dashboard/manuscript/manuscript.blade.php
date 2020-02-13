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
                    <h1 class="text-blue-900 text-4xl font-bold tracking-wide">Manuscript: {{ $manuscript->title }}</h1>

                </div>
                <div class="mt-2">
                    <div class="flex flex-wrap overflow-hidden">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
