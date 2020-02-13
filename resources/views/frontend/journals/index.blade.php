@extends('frontend.layouts.app')

@section('content')
<div class="bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-3 xl:-mx-3 my-16">

            <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-2/6 lg:my-3 lg:px-3 lg:w-2/6 xl:my-3 xl:px-3 xl:w-2/6">
                @include('frontend.journals.shared-sidebar')

            </div>

            <div class="w-full  overflow-hidden md:my-2 md:px-2 md:w-4/6 lg:my-3 lg:px-3 lg:w-4/6 xl:my-3 xl:px-3 xl:w-4/6">
                <div class="ml-5 ">
                    <div class="text-white leading-none px-5 py-4 bg-blue-800">
                        <h2 class="inline-block text-4xl">Journals</h2>
                        @if(!request()->is('journals'))
                            <a href="{{ route('journals') }}" class="ml-2 hover:underline">View all journals</a>
                        @endif
                    </div>

                    @foreach($categories as $category)

                        <div class="my-2 ml-4">
                            <h1 class="text-3xl mb-2 text-blue-900 font-bold tracking-wide">{{ $category->name }}</h1>
                            <ul class="">
                                @foreach($category->journals as $journal)
                                    <li class="">
                                        <a href="" class="leading-loose text-gray-800 hover:text-blue-700 hover:underline">
                                            {{ $journal->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
