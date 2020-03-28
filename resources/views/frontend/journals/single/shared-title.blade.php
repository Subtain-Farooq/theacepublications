<div class="flex">
    <img src="{{ url($journal->image->path.'/'.$journal->image->name) }}" class="border-2 w-56 object-left xl:block hidden">
    <div class="w-full flex flex-col justify-between xl:pl-4 lg:pl-0">
        <p class="text-2xl pl-5 leading-none py-4 bg-blue-800 text-white border-b-4 border-blue-500">{{ $journal->name }}</p>


        <ul>
            <li class="text-lg my-1"><span class="font-bold text-gray-700">Frequency: </span> <span class="text-gray-700">{{ $journal->frequency }}</span></li>
            <li class="text-lg my-1"><span class="font-bold text-gray-700">ISSN: </span> <span class="text-gray-700">{{ $journal->issn }}</span></li>
            <li class="text-lg my-1"><span class="font-bold text-gray-700">Language: </span>English</li>
        </ul>
        
   
    

        
        <div class="-mx-4 px-4">
            <?php $links = [
                'Current Issue',
                'Archive',
                'Editors',
                'Guide to Authors'

            ]; ?>


            <div class="flex flex-wrap overflow-hidden md:-mx-px lg:-mx-1 xl:-mx-1 sm:-mx-1">

                <div class="w-1/2 px-1 my-1 overflow-hidden sm:w-1/2 sm:px-1 sm:my-1 md:my-px md:px-px md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <a href="{{ route('journals.single', ['id' => $journal->id]) }}" class="block w-full py-2 text-center  @if(request()->is('journals/'.$journal->id)) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">About</a>
                </div>

                <div class="w-1/2 px-1 my-1 overflow-hidden sm:w-1/2 sm:px-1 sm:my-1 md:my-px md:px-px md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <a href="{{ route('journals.single.current-issues', ['id' => $journal->id]) }}" class="block w-full text-center py-2  @if(request()->is('journals/'.$journal->id.'/current-issues')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Current Issue</a>
                </div>

                <div class="w-1/2 px-1 my-1 overflow-hidden sm:w-1/2 sm:px-1 sm:my-1 md:my-px md:px-px md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <a href="{{ route('journals.single.archive', ['id' => $journal->id]) }}" class="block w-full text-center py-2 @if(request()->is('journals/'.$journal->id.'/archives')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Archive</a>
                </div>

                <div class="w-1/2 px-1 my-1 overflow-hidden sm:w-1/2 sm:px-1 sm:my-1 md:my-px md:px-px md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <a href="{{ route('journals.single.editors', ['id' => $journal->id]) }}" class="block w-full text-center py-2 @if(request()->is('journals/'.$journal->id.'/editors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Editors</a>
                </div>

                <div class="w-1/2 px-1 my-1 overflow-hidden sm:w-1/2 sm:px-1 sm:my-1 md:my-px md:px-px md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <a href="{{ route('journals.single.guide', ['id' => $journal->id]) }}" class="block w-full text-center py-2 @if(request()->is('journals/'.$journal->id.'/guide-to-authors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Guide</a>
                </div>

            </div>


            {{-- <a href="{{ route('journals.single', ['id' => $journal->id]) }}" class="px-6 py-2  @if(request()->is('journals/'.$journal->id)) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">About</a>
            <a href="{{ route('journals.single.current-issues', ['id' => $journal->id]) }}" class="px-6 py-2  @if(request()->is('journals/'.$journal->id.'/current-issues')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Current Issue</a>
            <a href="{{ route('journals.single.archive', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/archives')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Archive</a>
            <a href="{{ route('journals.single.editors', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/editors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Editors</a>
            <a href="{{ route('journals.single.guide', ['id' => $journal->id]) }}" class="px-6 py-2 @if(request()->is('journals/'.$journal->id.'/guide-to-authors')) bg-blue-800 text-white @else bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white @endif">Guide to Author</a> --}}

        </div>
    </div>
</div>

