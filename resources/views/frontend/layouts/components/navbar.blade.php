{{--<div class="bg-white border-b-2">
    <div class="container mx-auto px-5">
        <div class="flex justify-between">

            <div class="flex flex-wrap justify-start absolute overflow-hidden">
                <a href="/" class="bg-gray-100 mx-auto py-4 bg-white w-56  flex flex-col items-center">
                    <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>
            <div class="flex content-end justify-end ml-auto overflow-hidden">
                <a href="" class="px-5 py-4 bg-blue-900 text-white text-lg">About</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Ethics</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Authors</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Subscribers</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Journals</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Contact Us</a>
                <a href="{{ route('login') }}" class="px-8 py-4 text-white  text-lg bg-blue-600 hover:bg-blue-400">Login</a>
                <a href="{{ route('register') }}" class="px-8 py-4 text-white  text-lg bg-gray-900 hover:bg-blue-400">Register</a>
            </div>
        </div>

    </div>
</div>--}}






{{--
<div class="bg-blue-800">
    <div class="container mx-auto px-5">
        <div class="flex justify-between">

            <div class="flex flex-wrap justify-start absolute overflow-hidden">
                <a href="/" class="bg-white mx-auto py-4 w-56  flex flex-col items-center">
                    <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>
            <div class="flex content-end justify-end ml-auto overflow-hidden">
                <a href="" class="px-5 py-4 text-white text-lg">About</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Ethics</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Authors</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Subscribers</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Journals</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Contact Us</a>
                <a href="{{ route('login') }}" class="px-8 py-4 text-white  text-lg bg-blue-600 hover:bg-blue-400">Login</a>
                <a href="{{ route('register') }}" class="px-8 py-4 text-white  text-lg bg-gray-900 hover:bg-blue-400">Register</a>
            </div>
        </div>

    </div>
</div>
--}}





{{--
<nav class="bg-white border-b-2">
    <div class="container mx-auto px-5 py-16">
        <div class="flex items-center flex-wrap overflow-hidden ">

            <div class="flex items-center justify-start">
                <div class="-mx-2">
                    <a href="{{ route('about') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">About</a>
                    <a href="{{ route('ethics') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Ethics</a>
                    <a href="{{ route('authors') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Authors</a>
                    <a href="{{ route('subscribers') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Subscribers</a>
                </div>
            </div>

            <a href="/" class="absolute top-0  left-0 right-0 mx-auto py-4 bg-white w-56  flex flex-col items-center">
                <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
            </a>

            <div class="flex items-center justify-end ml-auto">
                <div class="-mx-2">
                    <a href="{{ route('journals') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Journals</a>
                    <a href="{{ route('contact') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Contact Us</a>
                    @guest()
                        <a href="{{ route('login') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Login</a>
                        <a href="{{ route('register') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Register</a>
                    @endguest
                    <div class="inline">
                        <div class="relative">
                            --}}
{{-- <img onclick="myFunction()" class="dropbtn h-12 mr-3 rounded-full" src="{{ url('vendor/console/svg/avatar.svg') }}">--}}{{--

                            <button onclick="myFunction()"
                                    class="dropbtn inline-block flex items-center focus:outline-none">
                                <div
                                    class="inline-block h-10 w-10 p-2 bg-gray-400 text-blue-800 text-lg font-semibold">
                                    S
                                </div>

                            </button>
                            <div id="myDropdown"
                                 class=" absolute right-0 w-48 bg-white border py-3">
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
                </div>
            </div>
        </div>
    </div>
</nav>
--}}



{{--<div class="bg-white border-b-2">
    <div class="container mx-auto px-5">
        <div class="flex justify-between">

            <div class="flex flex-wrap justify-start absolute overflow-hidden">
                <a href="/" class="bg-gray-100 mx-auto py-4 bg-white w-56  flex flex-col items-center">
                    <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>
            <div class="flex content-end justify-end ml-auto overflow-hidden">
                <a href="" class="px-5 py-4 bg-blue-900 text-white text-lg">About</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Ethics</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Authors</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Subscribers</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Journals</a>
                <a href="" class="px-5 py-4 text-gray-700  text-lg hover:bg-blue-400">Contact Us</a>
                <a href="{{ route('login') }}" class="px-8 py-4 text-white  text-lg bg-blue-600 hover:bg-blue-400">Login</a>
                <a href="{{ route('register') }}" class="px-8 py-4 text-white  text-lg bg-gray-900 hover:bg-blue-400">Register</a>
            </div>
        </div>

    </div>
</div>--}}






{{--
<div class="bg-blue-800">
    <div class="container mx-auto px-5">
        <div class="flex justify-between">

            <div class="flex flex-wrap justify-start absolute overflow-hidden">
                <a href="/" class="bg-white mx-auto py-4 w-56  flex flex-col items-center">
                    <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>
            <div class="flex content-end justify-end ml-auto overflow-hidden">
                <a href="" class="px-5 py-4 text-white text-lg">About</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Ethics</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Authors</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Subscribers</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Journals</a>
                <a href="" class="px-5 py-4 text-white  text-lg hover:bg-blue-400">Contact Us</a>
                <a href="{{ route('login') }}" class="px-8 py-4 text-white  text-lg bg-blue-600 hover:bg-blue-400">Login</a>
                <a href="{{ route('register') }}" class="px-8 py-4 text-white  text-lg bg-gray-900 hover:bg-blue-400">Register</a>
            </div>
        </div>

    </div>
</div>
--}}




{{--

<nav class="bg-white border-b-2">
    <div class="container mx-auto px-5">
        <div class="flex items-center flex-wrap overflow-hidden ">

            <div class="flex items-center justify-start">
                <div class="-mx-2">
                    <a href="{{ route('about') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">About</a>
                    <a href="{{ route('ethics') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Ethics</a>
                    <a href="{{ route('authors') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Authors</a>
                    <a href="{{ route('subscribers') }}" class="px-2  text-xl hover:text-blue-700 hover:underline">Subscribers</a>
                </div>
            </div>

            <a href="/" class="mx-auto py-4 bg-white w-56  flex flex-col items-center">
                <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
            </a>

            <div class="flex items-center justify-end ml-auto">
                <div class="-mx-2 flex">
                    <a href="{{ route('journals') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Journals</a>
                    <a href="{{ route('contact') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Contact Us</a>
                    @guest()
                        <a href="{{ route('login') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Login</a>
                        <a href="{{ route('register') }}" class="px-2 text-xl hover:text-blue-700 hover:underline">Register</a>
                    @endguest
                    <div class="">
                        <div class="relative">
                            --}}
{{-- <img onclick="myFunction()" class="dropbtn h-12 mr-3 rounded-full" src="{{ url('vendor/console/svg/avatar.svg') }}">--}}{{--

                            <button onclick="myFunction()"
                                    class="dropbtn inline-block flex items-center px-3 focus:outline-none">
                                <div
                                    class="inline-block h-10 w-10 p-2 bg-gray-400 text-blue-800 text-lg font-semibold">
                                    S
                                </div>

                            </button>
                            <div id="myDropdown"
                                 class="absolute z-50 right-0 w-48 bg-white border py-3">
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
                </div>
            </div>
        </div>
    </div>
</nav>
--}}


<div class="bg-white border-b-2 border-t-8 border-blue-800">
    <div class="container px-4 mx-auto">
        <div class="flex justify-between">
            <div class="flex items-center w-2/5 -mx-3">

                <a href="{{ route('home') }}" class="px-3 ml-3 text-xl  hover:text-blue-700 @if(request()->is('/')) font-semibold text-blue-800 tracking-wide @endif">Home</a>

                <a href="{{ route('about') }}" class="px-3 ml-3 text-xl  hover:text-blue-700 @if(request()->is('about')) font-semibold text-blue-800 tracking-wide @endif">About</a>

                {{--<a href="{{ route('ethics') }}" class="px-3  text-xl hover:text-blue-700 @if(request()->is('publishing-ethics')) font-semibold text-blue-800 tracking-wide @endif">Ethics</a>--}}

                <div class="relative px-3 inline">
                    <button onclick="guideline()"
                            class="inline-block flex items-center focus:outline-none text-xl">

                        Guidelines

                        <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>


                    </button>
                    <div id="guideButton" class="hidden absolute z-50 right-0 w-48 bg-white border py-3 mt-4 mr-4">
                        <a href="{{ route('authors') }}" class="block px-6 py-2 text-gray-600 hover:bg-indigo-100">For Authors</a>
                        <a href="{{ route('for-editors') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">For Editors</a>
                        <a href="{{ route('for-reviewers') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">For Reviewers</a>
                    </div>
                </div>

                <div class="relative px-3 block">
                    <button onclick="policy()"
                            class="dropbtn inline-block flex items-center focus:outline-none text-xl">

                        Policies

                        <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>


                    </button>
                    <div id="policyButton" class="hidden w-64 absolute z-50 right-0 bg-white border py-3 mt-4 mr-4">
                        <a href="{{ route('publication-ethics') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Publication Ethics</a>
                        <a href="{{ route('transparency-policy') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Transparency Policy</a>
                        <a href="{{ route('editorial-process') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Editorial Process</a>
                        <a href="#" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Competing Interest</a>
                        <a href="{{ route('licensing-copyrights') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Licenses and Copyright</a>
                        <a href="{{ route('authorship') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Authorship</a>
                        <a href="{{ route('correction') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Correction and Retractions</a>
                        <a href="{{ route('article-processing') }}" class="block px-6 py-2  text-gray-600 hover:bg-indigo-100">Article Processing Charges </a>

                    </div>
                </div>

                {{--    <a href="{{ route('authors') }}" class="px-3  text-xl hover:text-blue-700 @if(request()->is('guidelines-to-authors')) font-semibold text-blue-800 tracking-wide @endif">Authors</a>--}}

                <a href="{{ route('subscribers') }}" class="px-3  text-xl hover:text-blue-700 @if(request()->is('subscribers')) font-semibold text-blue-800 tracking-wide @endif">Subscribers</a>

            </div>

            <div class="w-1/5">
                <a href="/" class="mx-auto py-3  flex flex-col items-center">
                    <img class="w-12" src="{{ url('images/logo/logo7.png') }}">
                    <h1 class="text-xl font-bold text-blue-800 leading-none uppercase mt-1">Ace Publications</h1>
                </a>
            </div>

            <div class="flex items-center justify-end w-2/5">
                <div class="flex items-center -mx-3">
                    <a href="{{ route('journals') }}" class="px-3 text-xl hover:text-blue-700 @if(request()->is('journals*')) font-semibold text-blue-800 tracking-wide @endif">Journals</a>
                    <a href="{{ route('contact') }}" class="px-3 text-xl hover:text-blue-700 @if(request()->is('contact-us')) font-semibold text-blue-800 tracking-wide @endif">Contact</a>
                    @guest()
                        <a href="{{ route('login') }}" class="px-3 text-xl hover:text-blue-700 @if(request()->is('login')) font-semibold text-blue-800 tracking-wide @endif">Login</a>
                        <a href="{{ route('register') }}" class="px-3 text-xl hover:text-blue-700 @if(request()->is('register')) font-semibold text-blue-800 tracking-wide @endif">Register</a>
                    @endguest

                    <a href="{{ route('manuscript.create') }}" class="px-3 text-red-400 text-xl hover:text-blue-700 @if(request()->is('dashboard/manuscript')) font-semibold text-blue-800 tracking-wide @endif">Post Manuscript</a>


                    @auth()
                        <div class="relative px-3">
                            <button onclick="myFunction()"
                                    class="dropbtn inline-block flex items-center focus:outline-none">
                                <div
                                    class="inline-block flex items-center justify-center h-12 w-12 rounded-full bg-gray-400 text-blue-800 text-3xl font-semibold uppercase">
                                    {{ substr(Auth::user()->name, 0 ,1 )}}
                                </div>

                            </button>
                            <div id="myDropdown"
                                 class="hidden absolute z-50 right-0 w-48 bg-white border py-3 mt-2 mr-6">
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
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
