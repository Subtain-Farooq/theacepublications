<div class="mx-auto bg-white">
    <div class="px-8">
        <nav class="flex xl:flex-row lg:flex-row md:flex-row items-center py-3">
            <div class="mr-4 flex-shrink-0">
                <h1><a href="{{ route('console.home') }}">
                        <span class="text-blue-800 font-bold text-2xl">The ACE Publications</span>
                    </a>
                </h1>
            </div>
            <div class="flex-grow">
                {{--<a href="{{ route('console.home') }}" class="text-gray-800 mx-2 @if(request()->is('/')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                    Home
                </a>--}}


                <div class="">
                    {{--  <p class="text-md uppercase tracking-wide font-bold text-blue-700 pb-1">Publication Management Panel</p>--}}
                    <ul class="flex">
                        <li class="my-3 tracking-wide py-2 px-4  text-gray-700   @if(request()->is('/')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.home') }}" class="flex items-center">
                                Dashboard
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('categories*')) text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.categories') }}" class="flex items-center">
                                Journal Categories
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('types*'))  text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.types') }}" class="flex items-center">

                                Manuscript Types
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('journals*'))  text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.journals') }}" class="flex items-center">

                                Journals
                            </a>
                        </li>
                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('editors*'))  text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.editors') }}" class="flex items-center">

                                Editors
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('users*'))  text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.users') }}" class="flex items-center">

                                Users
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('manuscripts*'))  text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.manuscripts') }}" class="flex items-center">
                                Manuscripts
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('articles*')) 2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.articles') }}" class="flex items-center">
                                Articles
                            </a>
                        </li>

                        <li class="my-3 tracking-wide py-2 px-4 text-gray-700  @if(request()->is('reviewers*')) 2 text-blue-800 font-bold @else text-gray-700 hover:text-blue-600 @endif">
                            <a href="{{ route('console.reviewer') }}" class="flex items-center">
                                Reviewers
                            </a>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="">

                <div class="relative">
                    {{-- <img onclick="myFunction()" class="dropbtn h-12 mr-3 rounded-full" src="{{ url('vendor/console/svg/avatar.svg') }}">--}}
                    <button onclick="myFunction()"
                            class="dropbtn inline-block flex items-center focus:outline-none">
                        <div
                            class="inline-block h-10 w-10 p-2 bg-gray-400 text-blue-800 text-lg font-semibold rounded">
                            S
                        </div>

                    </button>
                    <div id="myDropdown" class="hidden visible absolute right-0 w-48 bg-white border rounded mt-1 shadow py-3">
                        <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-indigo-100">Dashboard</a>
                        <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-indigo-100">Profile</a>
                        <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-indigo-100">Settings</a>

                        <a href="{{ route('console.logout') }}" class="block px-6 py-2 text-gray-600 hover:bg-red-100 hover:text-red-500"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('console.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</div>
