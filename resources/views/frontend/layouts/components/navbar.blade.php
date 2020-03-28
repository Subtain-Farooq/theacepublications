<div class="bg-white border-b-2 border-t-8 border-blue-800">
    <div class="container px-4 mx-auto">

        <div class="lg:hidden">
            <a href="/" class="mx-auto sm:mt-6 mt-4 mb-3 flex flex-col items-center">
                <img class="lg:w-0 md:w-8 sm:w-6 w-6" src="{{ url('images/logo/logo7.png') }}">
                <h1 class="xl:text-xl lg:text-lg font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
            </a>
        </div>

        <div class="md:flex md:justify-between md:py-6 sm:py-6 py-6">
            <div class="flex md:items-center sm:w-full sm:justify-between justify-between lg:w-2/5 xl:-mx-3 lg:-mx-2 md:w-1/2 md:-mx-2 sm:-mx-3 sm:py-2 py-2">

                <a href="{{ route('home') }}" class="xl:px-3 lg:px-2 md:px-2 sm:px-2 xl:text-xl lg:text:lg  hover:text-blue-700 @if(request()->is('/')) text-blue-700 tracking-wide @endif">Home</a>

                <a href="{{ route('about') }}" class="xl:px-3 lg:px-2 md:px-2 sm:px-2 xl:text-xl lg:text:lg hover:text-blue-700 @if(request()->is('about')) text-blue-700 tracking-wide @endif">About</a>

                <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative xl:px-3 lg:px-2 md:px-2 sm:px-2 inline-block text-left">
                    <div>
                    <span class="">
                      <button @click="open = !open" type="button" class="inline-flex justify-center w-full inline-block flex items-center focus:outline-none xl:text-xl lg:text-lg
                                        @if(request()->is('guidelines-to-authors') || request()->is('for-editors') || request()->is('for-reviewers'))
                          text-blue-700 tracking-wide
                @endif transition ease-in-out duration-150">
                        Guidelines
                        <svg class="-mr-1 ml-1 xl:h-5 xl:w-5 md:w-4 md:h-4 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                      </button>
                    </span>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-3 w-48 shadow-lg">
                        <div class="rounded-sm bg-white border py-2">
                            <div class="py-1">

                                <a href="{{ route('authors') }}"
                                   class="block px-6 py-2 text-gray-600 hover:bg-indigo-100
                            @if(request()->is('guidelines-to-authors'))
                                       text-blue-700
@endif
                                       ">
                                    For Authors
                                </a>
                                <a href="{{ route('for-editors') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                        @if(request()->is('for-editors'))
                                    text-blue-700
@endif">
                                    For Editors
                                </a>
                                <a href="{{ route('for-reviewers') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                        @if(request()->is('for-reviewers'))
                                    text-blue-700
@endif
                                    ">For Reviewers</a>
                            </div>
                        </div>
                    </div>
                </div>





                <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative xl:px-3 lg:px-2 md:px-2 inline-block text-left">
                    <div>
    <span class="">
      <button @click="open = !open" type="button" class="inline-flex justify-center w-full bg-white inline-block flex items-center focus:outline-none xl:text-xl lg:text-lg
                            @if(request()->is('authorship') || request()->is('editorial-process') || request()->is('publication-ethics') || request()->is('transparency-policy') || request()->is('licensing-copyrights') || request()->is('correction') || request()->is('article-processing-charges') )
          text-blue-700
@endif transition ease-in-out duration-150">
        Policies
        <svg class="-mr-1 ml-1 xl:h-5 xl:w-5 md:w-4 md:h-4 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
      </button>
    </span>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-3 w-64 rounded-md shadow-lg">
                        <div class="rounded-sm bg-white border py-2">
                            <div class="py-1">
                                <a href="{{ route('authorship') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('authorship'))
                                    text-blue-700
@endif
                                    ">
                                    Authorship</a>
                                <a href="{{ route('editorial-process') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('editorial-process'))
                                    text-blue-700
@endif
                                    ">Editorial Process</a>
                                <a href="{{ route('publication-ethics') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                        @if(request()->is('publication-ethics'))
                                    text-blue-700
@endif
                                    ">Publication Ethics</a>
                                <a href="{{ route('transparency-policy') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('transparency-policy'))
                                    text-blue-700
@endif
                                    ">Transparency Policy</a>
                                <a href="{{ route('licensing-copyrights') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('licensing-copyrights'))
                                    text-blue-700
@endif
                                    ">Licenses and Copyright</a>
                                <a href="{{ route('correction') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('correction'))
                                    text-blue-700
@endif
                                    ">Correction and Retractions</a>
                                <a href="{{ route('article-processing') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100
                            @if(request()->is('article-processing-charges'))
                                    text-blue-700
@endif
                                    ">Article Processing Charges </a>

                            </div>


                        </div>
                    </div>
                </div>


                <a href="{{ route('subscribers') }}" class="xl:px-3 lg:px-2 md:px-2 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('subscribers')) font-semibold text-blue-800 tracking-wide @endif">Subscribers</a>

            </div>

            <div class="lg:w-1/5 lg:inline-block sm:hidden hidden">
                <a href="/" class="mx-auto py-3  flex flex-col items-center">
                    <img class="xl:w-12 lg:w-8" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="xl:text-xl lg:text-lg font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>

            <div class="flex md:items-center md:justify-end justify-between py-2 sm:w-full lg:w-2/5 md:w-1/2 sm:-mx-1 sm:py-2 py-6">

                    <a href="{{ route('journals') }}" class="xl:px-3 lg:px-2 md:px-2 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('journals*'))  text-blue-700 tracking-wide @endif">Journals</a>
                    <a href="{{ route('contact') }}" class="xl:px-3 lg:px-2 md:px-2 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('contact-us'))  text-blue-700 tracking-wide @endif">Contact</a>
                    @guest()
                        <a href="{{ route('login') }}" class="xl:px-3 lg:px-2 md:px-2 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('login')) text-blue-700 tracking-wide @endif">Login</a>
                        <a href="{{ route('register') }}" class="xl:px-3 lg:px-2 md:px-2 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('register')) text-blue-700 tracking-wide @endif">Register</a>
                    @endguest

                    <a href="{{ route('manuscript.create') }}" class="xl:px-3 lg:px-2 md:px-2 text-red-400 xl:text-xl lg:text-lg hover:text-blue-700 @if(request()->is('dashboard/manuscript')) text-blue-700 tracking-wide @endif">Publish Article</a>
                    @auth()



                    <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
                        <div>
                            <span class="shadow">
                            <button @click="open = !open" type="button" class="inline-block flex items-center justify-center h-8 w-8 lg:h-10 lg:w-10 lg:text-2xl ml-5 rounded-full bg-gray-400 text-blue-800 font-semibold uppercase hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
                                {{ substr(Auth::user()->name, 0 ,1 )}}

                            </button>
                            </span>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg">
                            <div class="rounded-sm bg-white shadow-xs py-3">
                                <div class="py-1">
                                    <a href="{{ route('dashboard') }}" class="block px-6 py-2 text-lg text-gray-600 hover:bg-indigo-100">Dashboard</a>
                                    <a href="{{ route('dashboard.profile') }}" class="block px-6 py-2 text-lg text-gray-600 hover:bg-indigo-100">Profile</a>
                                    <a href="{{ route('manuscript.manage') }}" class="block px-6 py-2 text-lg text-gray-600 hover:bg-indigo-100">Manuscripts</a>

                                    <a href="{{ route('logout') }}" class="block px-6 py-2 text-lg text-gray-600 hover:bg-red-100 hover:text-red-500"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth


            </div>
        </div>
    </div>
</div>
