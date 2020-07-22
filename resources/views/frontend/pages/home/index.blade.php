@extends('frontend.layouts.app')


@section('content')

{{--
 <div class="relative bg-white overflow-hidden">
  <div class="max-w-screen-xl mx-auto ">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">

              <div class="-mr-2 flex items-center md:hidden">

              </div>
            </div>
          </div>

        </nav>
      </div>

      <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h2 class="text-5xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-6xl sm:leading-none md:text-6xl">
            The ACE Publications
            <br class="xl:hidden" />
            <span class="text-blue-800 md:text-4xl font-bold tracking-wide sm:text-lg text-2xl">Reliable Publishing Partner</span>
          </h2>
           <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
          </p>

           <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border-4 border-blue-800 text-base leading-6 font-bold tracking-wider text-lg uppercase text-white bg-blue-800 hover:bg-white hover:text-blue-800 focus:outline-none  transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                Journals
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border-4 border-blue-800 uppercase text-base leading-6 font-bold text-lg tracking-wider text-blue-800 bg-white hover:text-white hover:bg-blue-800 focus:outline-none transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                Submit Article
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1514593214839-ce1849100055?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" alt="" />
  </div>
</div>
--}}





<img class="object-contain md:inline-block hidden"   src="{{ url('/images/background/books2-min.jpg') }}">

@if($issues->isNotEmpty())
    <div class="my-12 bg-white p-8">
        <div class="container mx-auto px-4">
            <h1 class="inline-block tracking-wide leading-none lg:text-5xl md:text-5xl text-4xl font-sans text-blue-800 py-1 border-b-4 border-blue-800 border-dotted">Latest Issue</h1>

            @foreach($issues as $issue)
                <a href="{{ route('manuscript', ['code' => $issue->code]) }}" class="block my-8 border-l-8 border-blue-800 hover:border-blue-600 bg-gray-100 px-12 py-8">
                    <h3 class="text-xl text-blue-700 text-justify">
                        {{ $issue->title }}
                    </h3>
                    {{ $issue->journal }}
                    <p class="text-teal-700 text-lg my-2">
                        <span class="text-gray-800 font-bold">Authors:</span>  {{ $issue->authors }}
                    </p>
                </a>
            @endforeach


        </div>
    </div>
@endif

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
