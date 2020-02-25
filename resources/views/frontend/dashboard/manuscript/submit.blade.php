@extends('frontend.layouts.dashboard')

@section('script')
{{--    <script src="{{ url('js/dropzone.js') }}"></script>--}}
@endsection

@section('dashboard-content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            {{--<h2 class="text-4xl font-bold tracking-wide mx-auto  text-white leading-none px-5 py-6 bg-blue-800 mt-16">Submit Your Journal</h2>--}}

            <div class="items-center px-16 py-12 border mt-6 mb-16 mx-auto">
                <h1 class="text-blue-900 text-3xl mb-12">Submit Your Journal</h1>



                <div class="w-full max-w-3xl mx-auto">
                    <form method="POST" action="{{ route('manuscript.store') }}" enctype="multipart/form-data">
                        @csrf



                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Select Journal</label>
                            </div>
                            <div class="md:w-2/3 w-full overflow-hidden">
                                <div class="relative">
                                    <select  name="journal" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('journal') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                        <option value="">Select Journal</option>
                                        @foreach ($journals as $journal)
                                            <option value="{{ $journal->id }}">{{ $journal->name }}</option>
                                        @endforeach

                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                @error('journal')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Title</label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="title" class="w-full px-3 py-2 border-2 outline-none @error('title') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('title') }}" placeholder="Title">
                                @error('title')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Type of Manuscript</label>
                            </div>
                            <div class="md:w-2/3 w-full overflow-hidden">
                                <div class="relative">
                                    <select  name="manuscript_type" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('manuscript_type') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                        <option value="">Select Manuscript Type</option>
                                        @foreach($manuscript_types as $manuscript_type)
                                            <option value="{{ $manuscript_type->id }}">{{ $manuscript_type->name }}</option>
                                        @endforeach

                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                @error('manuscript_type')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Authors</label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="authors" class="w-full px-3 py-2 border-2 outline-none @error('authors') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('authors') }}" placeholder="Multiple authors name separated by comma.">
                                {{--<span class="text-sm text-red-400">Multiple authors name separated by comma.</span>--}}
                                @error('authors')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Abstract</label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="abstract" class="w-full px-3 py-2 border-2 outline-none @error('abstract') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" rows="5" placeholder="Abstract">{{ old('abstract') }}</textarea>
                                @error('abstract')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3 flex justify-start">
                                <label class="text-lg text-blue-800">Select File(s)</label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="file" name="documents[]" class="w-full px-3 py-2 border-2 outline-none @error('documents') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" multiple>
                                @error('documents')
                                <p class="text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-center">

                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <div class="w-full">
                                    <button type="submit" class="bg-blue-800 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-blue-900 focus:outline-none">Submit Manuscript</button>
                                {{--
                                    <a href="{{ route('dashboard.profile') }}" class="bg-red-600 text-white inline-block tracking-wide leading-none px-6 py-3 hover:bg-red-700 focus:outline-none">Cancel</a>
                                --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
