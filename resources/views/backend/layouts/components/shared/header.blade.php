<!--Categories-->
@if(request()->is('categories*'))
<div class="flex items-center justify-between mb-3">
    <h2 class="text-3xl">Journal Categories Management</h2>
    <div class="">
        @if(!request()->is('categories'))
            <a href="{{ route('console.categories') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Categories</a>
        @endif
        @if(!request()->is('categories/create'))
            <a href="{{ route('console.categories.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New</a>
        @endif
        @if(!request()->is('categories/deleted'))
            <a href="{{ route('console.categories.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
        @endif
    </div>
</div>
@endif

{{--Manuscript Types--}}
@if(request()->is('types*'))
    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl">Manuscript Types Management</h2>
        <div class="">
            @if(!request()->is('types'))
                <a href="{{ route('console.types') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Manuscript Types</a>
            @endif
            @if(!request()->is('types/create'))
                <a href="{{ route('console.types.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New</a>
            @endif
            @if(!request()->is('types/deleted'))
                <a href="{{ route('console.types.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif
        </div>
    </div>
@endif

{{--Journals--}}
@if(request()->is('journals*'))
    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl">Journals Management</h2>
        <div class="">
            @if(!request()->is('journals'))
                <a href="{{ route('console.journals') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Journals</a>
            @endif
            @if(!request()->is('journals/create'))
                <a href="{{ route('console.journals.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New Journal</a>
            @endif
            @if(!request()->is('journals/deleted'))
                <a href="{{ route('console.journals.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif
        </div>
    </div>
@endif


{{--Editors--}}
@if(request()->is('editors*'))
    <div class="flex items-center justify-between mb-3">
    <h2 class="text-3xl mb-2">Editors Management</h2>
        <div class="">
            @if(!request()->is('editors'))
                <a href="{{ route('console.editors') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Editors</a>
            @endif
            @if(!request()->is('editors/create'))
                <a href="{{ route('console.editors.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New Editor</a>
            @endif
            @if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif
        </div>
    </div>
@endif

{{--Users--}}
@if(request()->is('users*'))

    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl mb-2">Users Management</h2>
        <div class="">
            @if(!request()->is('users'))
                <a href="{{ route('console.users') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Users</a>
            @endif
            {{--@if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif--}}
        </div>
    </div>
@endif
{{--Manuscripts--}}
@if(request()->is('manuscripts*'))

    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl mb-2">Manuscripts Management</h2>
        <div class="">
            @if(!request()->is('manuscripts'))
                <a href="{{ route('console.manuscripts') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Manuscripts</a>
            @endif
           {{-- @if(!request()->is('editors/create'))
                <a href="{{ route('console.editors.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New Editor</a>
            @endif
            @if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif--}}
        </div>
    </div>
@endif

{{--Issues--}}
@if(request()->is('articles*'))

    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl mb-2">Articles Management</h2>
        <div class="">
            @if(!request()->is('articles'))
                <a href="{{ route('console.articles') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Articles</a>
            @endif
            @if(!request()->is('articles/create'))
                <a href="{{ route('console.articles.create') }}" class="inline-block bg-teal-200 px-4 py-2 rounded hover:bg-teal-300">Add New Article</a>
            @endif
            {{--@if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif--}}
        </div>
    </div>
@endif

{{--Reviewers--}}
@if(request()->is('reviewers*'))

    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl mb-2">Reviewers Management</h2>
        <div class="">
            @if(!request()->is('reviewers'))
                <a href="{{ route('console.reviewer') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Reviewers</a>
            @endif

            {{--@if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif--}}
        </div>
    </div>
@endif

{{--Invoices--}}
@if(request()->is('invoices*'))

    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl mb-2">Invoice Management</h2>
        <div class="">
            @if(!request()->is('invoices'))
                <a href="{{ route('console.invoices') }}" class="inline-block bg-blue-200 px-4 py-2 rounded hover:bg-blue-300">All Invoices</a>
            @endif

            {{--@if(!request()->is('editors/deleted'))
                <a href="{{ route('console.editors.deleted') }}" class="inline-block bg-red-200 px-4 py-2 rounded hover:bg-red-300">Deleted</a>
            @endif--}}
        </div>
    </div>
@endif
