@extends('_layouts.master')

@section('body')
    <article>
        <header class="py-8">
            <a href="/">Nicky Woolf</a>
        </header>
        <div class="post">
            <div class="border-b border-grey mb-4 pb-4 leading-tight">
                <div class="text-xs">{{ $page->formattedDate() }}</div>
                <h1>{{ $page->title }}</h1>
            </div>
            @yield('content')
        </div>
    </article>
@stop


