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
                <h3 class="text-2xl mb-4">Edit {{ $journal->name }}</h3>
            </div>

            <div class="w-full border px-8 py-10 rounded">
                <form class="w-full -my-3" method="POST" action="{{ route('console.journals.update', ['id' => $journal->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Selected Categories</label>
                        </div>
                        <div class="w-4/5">
                            <div class="flex flex-wrap overflow-hidden lg:-mx-2 xl:-mx-2">
                                @foreach ($journal->categories as $category)
                                    <div class="w-full overflow-hidden lg:my-2 lg:px-2 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                                        <span class="">{{ $loop->iteration}} - {{ $category->name }}</span>
                                    </div>
                                @endforeach
                              </div>
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Name of Journal</label>
                        </div>
                        <div class="w-4/5">
                            <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ !is_null(old('name')) ? old('name') : $journal->name }}">
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
                            <input type="text" name="issn" class="w-full px-4 py-2 border rounded focus:outline-none @error('issn') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ !is_null(old('issn')) ? old('issn') : $journal->issn }}">
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
                            <input type="text" name="frequency" class="w-full px-4 py-2 border rounded focus:outline-none @error('frequency') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ !is_null(old('frequency')) ? old('frequency') : $journal->frequency }}">
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
                            <input type="text" name="language" class="w-full px-4 py-2 border rounded focus:outline-none @error('language') border-red-400 hover:bg-red-100  @else focus:border-black hover:border-blue-400 bg-white @enderror" value="{{ !is_null(old('language')) ? old('language') : $journal->language }}">
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
                        {!! !is_null(old('description')) ? old('description') : $journal->description !!}
                        </textarea>
                            @error('name')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-5">
                        <div class="w-1/5">
                            <label>Status of Journal</label>
                        </div>
                        <div class="w-4/5">
                            <label class="flex justify-start items-center cursor-pointer">
                                <div class="bg-white border rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                    <input type="checkbox" name="status" class="opacity-0 absolute" value="published" @if($journal->status == 'published' ) checked @endif>
                                    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                </div>
                                <div class="select-none">Published</div><span class="text-sm text-red-600 ml-2">( Tick the check box to make status <span class="font-bold tracking-wide">Published</span> OR leave it unchecked to make status Draft.)</span>
                            </label>
                            @error('status')
                            <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center my-3">
                        <div class="w-1/5">
                            <label>Title Image of Journal</label>
                        </div>
                        <div class="w-4/5">
                        <img src="{{ url($journal->image->path.'/'.$journal->image->name) }}" class="w-64 border-2">
                            @error('language')
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

                    <div class="flex items-center mt-10 mb-2 -mx-1">
                        <button type="submit" class="inline-block bg-green-400 px-5 py-2 rounded capitalize mx-1 hover:bg-green-500">Update</button>

                        <a href="{{ route('console.journals')}}" class="inline-block bg-red-400 px-5 py-2 rounded capitalize mx-1 hover:bg-red-500">Cancel</a>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection

