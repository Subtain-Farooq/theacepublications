@extends('frontend.layouts.app')


@section('content')





<img class="object-cover w-full md:inline-block hidden" style="height: 450px;"  src="{{ url('/images/background/image7.jpg') }}">

<div class="bg-gray-100 pt-12 pb-24 ">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="flex">
                <h1 class="text-center tracking-wide lg:text-5xl md:text-5xl text-4xl font-sans mt-5  text-blue-800 py-1 border-b-4 border-blue-800 border-dotted">Why Chose us</h1>
            </div>
        </div>

        <div class="flex flex-wrap items-stretch xl:-mx-3 lg:-mx-3 md:-mx-3 sm:-mx-3 mt-16">
            <div class="w-full lg:my-3 lg:px-3 lg:w-1/2 md:my-3 md:px-3 sm:px-3 sm:py-2 py-2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center sm:flex-row flex-col border-4 border-blue-700 p-5">
                        <img class="sm:h-32 sm:w-32 w-24 h-24" src="{{ url('images/icons/i1.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl sm:text-left text-center font-bold text-gray-800">Rapid Publication</h2>
                            <p>ACE Publications deliver the fast and finest publications within short time span.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:my-3 lg:px-3 lg:w-1/2 md:my-3 md:px-3 sm:px-3 sm:py-2 py-2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center sm:flex-row flex-col  border-4 border-blue-700 p-5">
                        <img class="sm:h-32 sm:w-32 w-24 h-24" src="{{ url('images/icons/i2.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl sm:text-left text-center font-bold text-gray-800">Peer Reviewed</h2>
                            <p>All publication process done by highly qualified professional scholars with the assistance of Editorial Board Members.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:my-3 lg:px-3 lg:w-1/2 md:my-3 md:px-3 sm:px-3 sm:py-2 py-2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center sm:flex-row flex-col border-4 border-blue-700 p-5">
                        <img class="sm:h-32 sm:w-32 w-24 h-24" src="{{ url('images/icons/i3.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl sm:text-left text-center font-bold text-gray-800">Open Access</h2>
                            <p>Time to opt the open access journals for the publication as requirement to beat the traditional publication trends.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:my-3 lg:px-3 lg:w-1/2 md:my-3 md:px-3 sm:px-3 sm:py-2 py-2">
                <div class="bg-white p-4 ">
                    <div class="flex items-center sm:flex-row flex-col border-4 border-blue-700 p-5">
                        <img class="sm:h-32 sm:w-32 w-24 h-24" src="{{ url('images/icons/i4.svg') }}">
                        <div class="ml-4">
                            <h2 class="text-2xl sm:text-left text-center font-bold text-gray-800">International Community</h2>
                            <p>ACE Publication provides a platform for researchers from all over the world and invites high quality of research work</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="bg-white md:py-24 sm:py-16 py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between lg:-mx-2 xl:-mx-2">
            <div class="w-full lg:my-2 lg:px-3 lg:w-1/2 md:my-2 md:px-2 md:w-1/2 sm:w-3/5">
                <div class="flex flex-col bg-white xl:pr-12">
                    <h3 class="text-blue-800 lg:inline-block font-sans md:text-4xl lg:text-6xl sm:text-3xl text-3xl capitalize lg:font-bold lg:tracking-wide leading-none sm:mt-3 px-5">Skilled and experienced</h3>
                    <p class="text-black text-justify lg:mt-12 md:mt-6 sm:mt-5 sm:leading-5 lg:leading-8 mt-4 p-5 lg:text-lg">
                        ACE International Publications is an idyllic house that accepts quality research across the world without any country, boundaries and nationality. ACE International Publications provide services between the modern youth and the experienced, competent and qualified professionals through their intellectual awakening.
                    </p>
                </div>
            </div>
            <div class="w-full lg:my-2 lg:px-3 lg:w-1/2 md:my-2 md:px-2 md:w-1/2 sm:w-2/5 sm:mt-5 sm:flex sm:items-center sm:justify-end">
                <img class="rounded-lg float-right xl:max-w-xl lg:max-w-md md:w-full sm:w-48 md:pl-12 sm:rounded-sm w-full p-5" src="{{ url('images/background/b.jpg') }}">
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 md:py-24 sm:py-16 py-12">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap items-center flex-row-reverse justify-center lg:-mx-2 xl:-mx-2">

            <div class="w-full lg:my-2 lg:px-3 lg:w-1/2 md:my-2 md:px-2 md:w-1/2 sm:w-3/5">
                <div class="flex flex-col lg:pl-12 md:pl-6">
                    <h3 class="text-blue-800 lg:inline-block md:text-4xl font-sans  md:text-4xl lg:text-6xl sm:text-3xl text-3xl capitalize leading-none sm:mt-4 px-5 lg:font-bold lg:tracking-wide ">Publication Solutions</h3>
                    <p class="text-black text-justify lg:mt-12 md:mt-6 sm:mt-5 sm:leading-5 mt-4 p-5 lg:text-lg lg:leading-8">
                        WE are better than the best in all areas of knowledge such as Mathematics, Physical Sciences, English, Management, Social Sciences, Biological Sciences, Arts and Education, Animal Sciences, Poultry Sciences, Veterinary Sciences, Pharmacy and Engineering Technology. ACE International Publications invite good quality of research work for peer reviewed journals
                    </p>
                </div>
            </div>
            <div class="w-full lg:my-2 lg:px-3 lg:w-1/2 md:my-2 md:px-2 md:w-1/2 sm:w-2/5 sm:mt-5 sm:flex sm:items-center sm:justify-start">
                <img class="rounded-sm float-right xl:max-w-xl lg:max-w-md md:w-full sm:w-48 p-5"  src="{{ url('images/background/b3.jpg') }}">
            </div>

        </div>
    </div>
</div>


<div class="bg-white">
    <div class="container mx-auto py-32">
        <div class="flex flex-col items-center justify-center">
            <h1 class="md:text-6xl sm:text-5xl text-3xl text-blue-800 font-sans">Publish Yor Knowledge</h1>
            <p class="text-blue-900 font-medium tracking-wide text-xl">One click away from your success</p>

            <div class="mt-12">
                <a href="{{ route('ethics') }}" class="sm:inline-block block text-blue-800 font-bold text-lg uppercase px-8 py-4 tracking-wider border-4 border-blue-800 hover:bg-blue-800 hover:text-white">How to Write</a>
                <a href="{{ route('journals') }}" class="sm:inline-block block sm:mt-0 mt-4 text-center text-white bg-blue-800 font-bold subpixel-antialiased text-lg uppercase px-8 py-4 tracking-widest border-4 border-blue-800 hover:bg-white hover:text-blue-800">Journals</a>
            </div>
        </div>
    </div>
</div>

@endsection
