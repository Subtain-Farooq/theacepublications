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
        CKEDITOR.replace( 'cite-journal' );
    </script>

@stop






@section('content')

    @include('backend.layouts.components.shared.header')

    <div class="bg-red-600 text-white px-4 py-3 rounded relative mb-5 text-lg" role="alert">
        <strong class="font-bold tracking-wider">Important Note!</strong>
        <span class="block sm:inline">After publishing the article you are unable to update the article.</span>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white p-8 rounded">
        <div class="w-full">
            <div class="flex justify-between">
                <h3 class="text-2xl mb-4">Add New Article</h3>
            </div>

            <div class="w-full border px-8 py-10 rounded">
                <form class="w-full -my-3" method="POST" action="{{ route('console.articles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Journal</label>
                        </div>
                        <div class="w-4/5">
                            <div class="relative">
                                <select  name="journal" class="w-full appearance-none px-4 py-2 rounded focus:outline-none border @error('journal') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                                    <option value="">Select Journal</option>
                                    @foreach($journals as $journal)
                                        @if(isset($journal->currentIssue))
                                            <option value="{{ $journal->id }}">{{ $journal->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            @error('journal')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Title</label>
                        </div>
                        <div class="w-4/5">
                            <textarea name="title" class="w-full px-4 py-2 border rounded focus:outline-none @error('title') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">{{ old('title') }}</textarea>
                            @error('title')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Code</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="code" class="w-full px-4 py-2 border rounded focus:outline-none @error('code') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('code') }}">
                            @error('code')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Authors</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="authors" class="w-full px-4 py-2 border rounded focus:outline-none @error('authors') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('authors') }}">
                            @error('authors')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>DOI</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="doi" class="w-full px-4 py-2 border rounded focus:outline-none @error('doi') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('doi') }}">
                            @error('doi')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>DOI Link</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="doi_link" class="w-full px-4 py-2 border rounded focus:outline-none @error('doi_link') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('doi_link') }}">
                            @error('doi_link')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Page Numbers</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="pages" class="w-full px-4 py-2 border rounded focus:outline-none @error('pages') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ old('pages') }}">
                            @error('pages')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Abstract of Article</label>
                        </div>
                        <div class="w-4/5">
                        <textarea name="abstract" id="editor-journal" class="w-full px-4 py-2 border rounded focus:outline-none @error('abstract') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                        {{ old('abstract') }}
                        </textarea>
                            @error('abstract')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>How to Cite</label>
                        </div>
                        <div class="w-4/5">
                        <textarea name="cite" id="cite-journal" class="w-full px-4 py-2 border rounded focus:outline-none @error('cite') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror">
                        {{ old('cite') }}
                        </textarea>
                            @error('cite')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>PDF file of article</label>
                        </div>
                        <div class="w-4/5">
                            <input type="file" name="document" class="w-full px-4 py-2 border rounded focus:outline-none @error('document') border-red-400 hover:bg-red-100 @else focus:border-black hover:border-blue-400 bg-white @enderror">

                            @error('document')
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

