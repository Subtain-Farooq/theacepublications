@extends('frontend.layouts.app')


@section('content')

{{--<img class="w-full object-cover" style="height: 700px;" src="{{ url('/images/background/b13.jpg') }}" >--}}


{{--<div class="z-0 w-full object-contain" style="height:700px; background-image: url('/images/background/image1.jpg');">
--}}{{--    <div class="container mx-auto">
        <div class="w-full mx-auto">
            <h1 class="bg-white inline-block px-5 tracking-wide main-font font-bold text-6xl text-gray-800 ">Knowledge is Power</h1>
            <blockquote class="bg-blue-600 px-5 inline-block text-4xl text-white">"Everything diminishes when it is used except knowledge"</blockquote>
             <p class="inline text-sm ml-4">( Confucius )</p>
        </div>
    </div>--}}{{--
</div>--}}

<img class=" w-full object-cover" style="height: 450px;" src="{{ url('/images/background/image7.jpg') }}">


{{--<div class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="flex items-center -mx-4">
            <div class="w-1/2 px-4">
                <h1 class=" tracking-wide main-font font-bold text-6xl text-gray-800 ">Knowledge is Power</h1>
                <blockquote class="inline text-3xl">Everything diminishes when it is used except knowledge</blockquote>
                --}}{{--<p class="inline text-sm ml-4">( Confucius )</p>--}}{{--
            </div>
            <div class="w-1/2 flex justify-start px-4">
                <img class="py-12" style="width:800px;" src="{{ url('images/background/back3.png') }}">
            </div>
        </div>
    </div>
</div>--}}

<div class="bg-gray-100 pt-12 pb-24 ">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="flex">
                <h1 class="text-center tracking-wide text-6xl font-semibold text-blue-900 py-1 border-b-4 border-blue-800 border-dotted">Why Chose Us</h1>
            </div>
        </div>
        <div class="flex flex-wrap items-stretch xl:-mx-3 mt-16">

            <div class="w-full xl:my-3 xl:px-3 xl:w-1/2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center  border-4 border-blue-700 p-5">
                        <img class="h-40 w-40" src="{{ url('images/icons/i1.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold text-gray-800">Rapid Publication</h2>
                            <p>ACE Publications deliver the fast and finest publications within short time span.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full xl:my-3 xl:px-3 xl:w-1/2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center  border-4 border-blue-700 p-5">
                        <img class="h-40 w-40" src="{{ url('images/icons/i2.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold text-gray-800">Peer Reviewed</h2>
                            <p>All publication process done by highly qualified professional scholars with the assistance of Editorial Board Members.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center border-4 border-blue-700 p-5">
                        <img class="h-40 w-40" src="{{ url('images/icons/i3.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold text-gray-800">Open Access</h2>
                            <p>Time to opt the open access journals for the publication as requirement to beat the traditional publication trends.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center border-4 border-blue-700 p-5">
                        <img class="h-40 w-40" src="{{ url('images/icons/i4.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold text-gray-800">International Community</h2>
                            <p>ACE Publication provides a platform for researchers from all over the world and invites high quality of research work</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="bg-white py-24">
    <div class="container mx-auto px-4">

   {{--     <div class="flex justify-center">
            <div class="flex">
                <h1 class="text-center tracking-wide text-4xl font-semibold text-gray-800 py-1 border-b-4 border-blue-800 border-dotted">Know About Our Company</h1>
            </div>
        </div>--}}

        {{--        <div class="flex flex-wrap overflow-hidden lg:-mx-2 xl:-mx-2 mt-16">

                    <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                        <img class="py-12" style="width:800px;" src="{{ url('images/illustrations/l5.svg') }}">
                    </div>

                    <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-2/3">
                        <!-- Column Content -->
                    </div>

                </div>--}}

        <div class="flex flex-wrap items-center  lg:-mx-2 xl:-mx-2">
            <div class="w-full lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/2">
                <div class="flex flex-col bg-white pr-16">
                    <h3 class="text-blue-900 font-bold text-6xl capitalize leading-none">Skilled and experienced</h3>
                    <p class="text-black text-justify mt-12">
                        ACE International Publications is an idyllic house that accepts quality research across the world without any country, boundaries and nationality. ACE International Publications provide services between the modern youth and the experienced, competent and qualified professionals through their intellectual awakening.
                    </p>
                </div>
            </div>
            <div class="w-full lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/2">
                <img class="rounded" style="width:800px;" src="{{ url('images/background/b.jpg') }}">
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-24">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap items-center  lg:-mx-2 xl:-mx-2">
            <div class="w-full lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/2">
                <img class="rounded" style="width:800px;" src="{{ url('images/background/b3.jpg') }}">
            </div>
            <div class="w-full lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/2">
                <div class="flex flex-col pl-16">
                    <h3 class="text-blue-900 font-bold text-6xl capitalize leading-none">Publication Solutions</h3>
                    <p class="text-black text-justify mt-12">
                        WE are better than the best in all areas of knowledge such as Mathematics, Physical Sciences, English, Management, Social Sciences, Biological Sciences, Arts and Education, Animal Sciences, Poultry Sciences, Veterinary Sciences, Pharmacy and Engineering Technology. ACE International Publications invite good quality of research work for peer reviewed journals
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="bg-white">
    <div class="container mx-auto py-32">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-6xl text-blue-900 font-bold">Publish Yor Knowledge</h1>
            <p class="text-blue-900 font-medium tracking-wide text-xl">One click away from your success</p>

            <div class="mt-12">
                <a href="{{ route('ethics') }}" class="text-blue-800 font-bold text-lg uppercase px-8 py-4 tracking-wider border-4 border-blue-800 hover:bg-blue-800 hover:text-white">How to Write</a>
                <a href="{{ route('journals') }}" class="text-white bg-blue-800 font-bold text-lg uppercase px-8 py-4 tracking-wider border-4 border-blue-800 hover:bg-white hover:text-blue-800">Journals</a>
            </div>
        </div>
    </div>
</div>

@endsection
