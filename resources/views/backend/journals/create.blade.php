@extends('backend.layouts.app')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('head-script')
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.journals-category').select2();
        });
        CKEDITOR.replace( 'editor-journal' );
    </script>

@stop






@section('content')

@include('backend.layouts.components.shared.header')

<div class="bg-white p-8 rounded">
    <div class="w-full">

        <div class="flex justify-between">
            <h3 class="text-2xl mb-4">Add New Journal</h3>
        </div>

        <div class="w-full border px-8 py-10 rounded">
            <form class="w-full -my-3" method="POST" action="{{ route('console.journals.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Category of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <div class="relative">
                            <select  name="category[]" multiple="multiple" class="journals-category w-full appearance-none px-4 py-2 rounded focus:outline-none @error('name') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('category')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Name of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('name') }}">
                        @error('name')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>ISSN of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="issn" class="w-full px-4 py-2 border rounded focus:outline-none @error('issn') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('issn') }}">
                        @error('issn')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Frequency of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="frequency" class="w-full px-4 py-2 border rounded focus:outline-none @error('frequency') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('frequency') }}">
                        @error('frequency')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Language of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <input type="text" name="language" class="w-full px-4 py-2 border rounded focus:outline-none @error('language') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('language') }}">
                        @error('language')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Description of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <textarea name="description" id="editor-journal" class="w-full px-4 py-2 border rounded focus:outline-none @error('description') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                        {{ old('description') }}
                        </textarea>
                        @error('name')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center my-3">
                    <div class="w-1/5">
                        <label>Title Image of Journal</label>
                    </div>
                    <div class="w-4/5">
                        <input type="file" name="image" class="w-full px-4 py-2 border rounded focus:outline-none @error('documents') border-red-400 hover:bg-red-100 @else focus:border-black hover:border-blue-400 bg-white @enderror">

                        @error('image')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{--<div class="flex items-center my-5">
                    <div class="w-1/5">
                        <label>Status of Category</label>
                    </div>
                    <div class="w-4/5">
                        <label class="flex justify-start items-center cursor-pointer">
                            <div class="bg-white border rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                <input type="checkbox" name="status" class="opacity-0 absolute" value="1">
                                <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            </div>
                            <div class="select-none">Active</div><span class="text-sm text-red-600 ml-2">( Tick the check box to make status <span class="font-bold tracking-wide">Active</span>.)</span>
                        </label>
                        @error('status')
                        <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>--}}

                <div class="flex items-center mt-10 mb-2 -mx-1">
                    <button type="submit" name="save" value="published"  class="inline-block bg-green-400 px-5 py-2 rounded capitalize mx-1 hover:bg-green-500">Publish</button>
                    <button type="submit" name="save"  value="draft" class="inline-block bg-blue-400 px-5 py-2 rounded capitalize mx-1 hover:bg-blue-500">Save as Draft</button>
                    <a href="{{ route('console.journals')}}" class="inline-block bg-red-400 px-5 py-2 rounded capitalize mx-1 hover:bg-red-500">Cancel</a>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection

