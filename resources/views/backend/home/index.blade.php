@extends('backend.layouts.app')

@section('content')

<div class="">
    <div class="flex flex-wrap overflow-hidden lg:-mx-2 xl:-mx-2">

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">

            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total No. of Users</h2>
                <p class="font-bold">{{ $all }}</p>
            </div>

           {{-- <div class="bg-white rounded">
                <div class="bg-no-repeat bg-right" style="background-size: 12rem; background-image: url('{{ url('vendor/console/images/img-4.png') }}')">
                   <div class="p-5">
                       <h2 class="text-xl mb-3">Total No. of Users</h2>
                       <p>5</p>
                   </div>
                </div>
            </div>--}}

        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Active Users</h2>
                <p class="font-bold">{{ $active }}</p>
            </div>
        </div>

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Disabled Users</h2>
                <p class="font-bold">{{ $disabled }}</p>
            </div>
        </div>

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Verified Users</h2>
                <p class="font-bold">{{ $verified }}</p>
            </div>
        </div>

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Unverified Users</h2>
                <p class="font-bold">{{ $unverified }}</p>
            </div>
        </div>

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total Journal Categories</h2>
                <p class="font-bold">{{ $all_categories }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Active Categories</h2>
                <p class="font-bold">{{ $categories_active }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Disabled Categories</h2>
                <p class="font-bold">{{ $categories_disabled }}</p>
            </div>
        </div>

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total No. of Journals</h2>
                <p class="font-bold">{{ $all_journal }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Published Journals</h2>
                <p class="font-bold">{{ $journal_published }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Drafted Journals</h2>
                <p class="font-bold">{{ $journal_draft }}</p>
            </div>
        </div>

{{--        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total Current Issues</h2>
                <p class="font-bold">{{ $current_issue }}</p>
            </div>
        </div>--}}
{{--
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total Archived Issues</h2>
                <p class="font-bold">{{ $archived_issue }}</p>
            </div>
        </div>--}}

        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Total Editors</h2>
                <p class="font-bold">{{ $all_editors }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Active Editors</h2>
                <p class="font-bold">{{ $active_editors }}</p>
            </div>
        </div>
        <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/5 xl:my-2 xl:px-2 xl:w-1/5">
            <div class="bg-white p-5 rounded">
                <h2 class="text-xl mb-3">Disabled Editors</h2>
                <p class="font-bold">{{ $disabled_editors }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
