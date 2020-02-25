<div class="flex">
    <img src="{{ url($journal->image->path.'/'.$journal->image->name) }}" class="border-2 w-56 object-left ">
    <div class="w-full flex flex-col justify-between pl-4">
        <p class="text-2xl pl-5 leading-none py-4 bg-blue-800 text-white border-b-4 border-blue-500">{{ $journal->name }}</p>
        <ul class="">
            <li class="text-lg my-1"><span class="font-bold text-gray-700">Frequency: </span> <span class="text-gray-700">{{ $journal->frequency }}</span></li>
            <li class="text-lg my-1"><span class="font-bold text-gray-700">ISSN: </span> <span class="text-gray-700">{{ $journal->issn }}</span></li>
            <li class="text-lg my-1"><span class="font-bold text-gray-700">Language: </span>English</li>
        </ul>
        <ul class="flex justify-between -mx-4 px-4">
            <?php $links = [
                'Current Issue',
                'Archive',
                'Editors',
                'Guide to Authors'

            ]; ?>


            <a href="{{ route('journals.single', ['id' => $journal->id]) }}" class="px-6 py-2  @if(request()->is('journals/'.$journal->id)) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif"><li>About</li></a>
            <a href="{{ route('journals.single.current-issues', ['id' => $journal->id]) }}" class="px-6 py-2  @if(request()->is('journals/'.$journal->id.'/current-issues')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif"><li>Current Issue</li></a>
            <a href="{{ route('journals.single.archive', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/archives')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif"><li>Archive</li></a>
            <a href="{{ route('journals.single.editors', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/editors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif"><li>Editors</li></a>
            <a href="{{ route('journals.single.guide', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/guide-to-authors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif"><li>Guide to Author</li></a>

        </ul>
    </div>
</div>

