@extends('frontend.layouts.app')

@section('content')
    @foreach($categories as $category)
        {{ $category->name }}

        @foreach($category->journals as $journal)
            {{ $journal->image->name }}
        @endforeach
    @endforeach
@stop
