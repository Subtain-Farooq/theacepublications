<div class="bottom-0 left-0 right-0">
    <div class="bg-blue-900 py-12">
        <div class="container mx-auto px-2 md:px-3 sm:px-3">
            <div class="flex lg:flex-row flex-col">
                <div class="flex lg:w-7/12 w-full">

                    <ul class="flex flex-wrap items-center lg:justify-start justify-center">
                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('about') }}">About us</a>
                        </li>

                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('authors') }}">For Authors</a>
                        </li>
                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('for-editors') }}">For Editors</a>
                        </li>
                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('for-reviewers') }}">For Reviewers</a>
                        </li>
                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('reviewer.create') }}">Join as Reviewer</a>
                        </li>

                        <li class="flex-shrink-0 w-48 lg:text-left text-center py-2 my-1 text-white leading-none">
                            <a href="{{ route('open-access') }}">Open Access</a>
                        </li>

                    </ul>
                </div>
                <div class="lg:w-5/12 lg:mt-0 w-full mt-8">
                    <h1 class="text-white text-3xl font-sans mb-2 lg:text-left tracking-wider text-center">Follow us on</h1>
                    <div class="flex flex-wrap lg:justify-start justify-center -mx-1">

                        <a href="https://www.facebook.com/acepublications" target="_blank">
                            <div class="bg-white rounded-sm p-3  mx-1">
                                <img src="{{ url('images/icons/facebook.svg') }}" class="h-12 w-12">
                            </div>
                        </a>
                        <a href="https://m.me/acepublications" target="_blank">
                            <div class="bg-white rounded-sm p-3  mx-1">
                                <img src="{{ url('images/icons/messenger.svg') }}" class="h-12 w-12">
                            </div>
                        </a>

                        <a href="https://wa.me/971563860507" target="_blank">
                            <div class="bg-white rounded-sm p-3 mx-1">
                                <img src="{{ url('images/icons/whatsapp.svg') }}" class="h-12 w-12">
                            </div>
                        </a>

                        <a href="https://twitter.com/PublicationsAce" target="_blank">
                            <div class="bg-white rounded-sm p-3 mx-1">
                                <img src="{{ url('images/icons/twitter.svg') }}" class="h-12 w-12">
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-800 p-3">
        <div class="container mx-auto">
            <p class="text-white font-sans antialiased tracking-wider text-center">
                Powered and Copyrights by ACE (Pvt) Ltd.
            </p>
        </div>
    </div>

</div>
