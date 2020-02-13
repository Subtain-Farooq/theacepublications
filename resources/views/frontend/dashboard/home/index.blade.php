@extends('frontend.layouts.dashboard')


@section('dashboard-content')

<div class="bg-white">
    <div class="container mx-auto px-4">
        @if(Session::has('alert'))
            @component('frontend.layouts.shared.alert', ['alert' => 'green'])
                {{ Session::get('message') }}
            @endcomponent
        @endif
        <div class="border p-16 flex items-center justify-center mb-16 mt-6">
            <img class="w-64" src="{{ url('images/illustrations/no-data.svg') }}" >
        </div>
    </div>
</div>


@endsection
