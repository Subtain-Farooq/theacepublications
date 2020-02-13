{{--<div class="mb-10">
    <p class="text-md uppercase tracking-wide font-bold text-blue-700 pb-1">Publication Management Panel</p>
    <ul>
        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('/')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.home') }}" class="flex items-center">
                Dashboard
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('categories*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.categories') }}" class="flex items-center">
                Journal Categories
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('types*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.types') }}" class="flex items-center">

                Manuscript Types
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('journals*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.journals') }}" class="flex items-center">

                Journals
            </a>
        </li>
        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('editors*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.editors') }}" class="flex items-center">

                Editors
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('users*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.users') }}" class="flex items-center">

                Users
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('manuscripts*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.manuscripts') }}" class="flex items-center">
                Manuscripts
            </a>
        </li>

        <li class="my-3 tracking-wide  text-gray-700  @if(request()->is('articles*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.articles') }}" class="flex items-center">
                Articles
            </a>
        </li>

    </ul>
</div>--}}



<div class="">
  {{--  <p class="text-md uppercase tracking-wide font-bold text-blue-700 pb-1">Publication Management Panel</p>--}}
    <ul class="flex justify-between">
        <li class="my-3 tracking-wide py-2  text-gray-700   @if(request()->is('/')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.home') }}" class="flex items-center">
                Dashboard
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('categories*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.categories') }}" class="flex items-center">
                Journal Categories
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('types*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.types') }}" class="flex items-center">

                Manuscript Types
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('journals*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.journals') }}" class="flex items-center">

                Journals
            </a>
        </li>
        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('editors*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.editors') }}" class="flex items-center">

                Editors
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('users*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.users') }}" class="flex items-center">

                Users
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('manuscripts*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.manuscripts') }}" class="flex items-center">
                Manuscripts
            </a>
        </li>

        <li class="my-3 tracking-wide py-2 text-gray-700  @if(request()->is('articles*')) border-blue-700 border-t-2 border-b-2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
            <a href="{{ route('console.articles') }}" class="flex items-center">
                Articles
            </a>
        </li>

    </ul>
</div>






