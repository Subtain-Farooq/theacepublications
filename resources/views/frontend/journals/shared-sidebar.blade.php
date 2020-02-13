<div class="w-full">
    <div class="text-white leading-none px-5 py-4 bg-blue-800">
        <h2 class="inline-block text-4xl">Journals Category</h2>
       {{-- @if(!request()->is('journals'))
            <a href="{{ route('journals') }}" class="ml-2 hover:underline">View all journals</a>
        @endif--}}
    </div>
    <ul class="border-2 border-t-0 py-4">
        @if(!request()->is('journals'))
            <a href="{{ route('journals') }}">
                <li class="text-gray-700 py-2 px-4 text-lg @if(request()->is('journals')) bg-gray-300 @else hover:bg-gray-200 hover:text-black @endif">
                    View All Journals
                </li>
            </a>
        @endif

        @foreach($all_categories as $category)
            <a href=" {{ route('journals.bySubject', ['id'=> $category->id]) }}">
                <li class="text-gray-700 py-2 px-4 text-lg   @if(request()->is('journals/subject/'.$category->id.'*')) bg-gray-300 @else hover:bg-gray-200 hover:text-black @endif">
                    {{ $category->name }}
                </li>
            </a>

        @endforeach
    </ul>
    <a href="{{ route('manuscript.create') }}" class="inline-block w-full bg-gray-400 text-gray-700 tracking-wide py-3 font-bold my-4 text-center text-xl hover:text-white hover:bg-blue-900">Submit Your Manuscript</a>
</div>
