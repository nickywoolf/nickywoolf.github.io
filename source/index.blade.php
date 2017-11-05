@extends('_layouts.master')

@section('body')
    <header class="my-8">
        <h1 class="text-center">
            <a href="/" class="text-grey-darkest hover:text-grey-darker no-underline">
                Nicky Woolf
            </a>
        </h1>
        <nav>
            <ul class="list-reset text-center">
                @foreach ($page->navigation as $text => $url)
                <li class="inline-block px-4">
                    <a class="text-grey-darkest no-underline hover:underline" href="{{ $url }}">
                        {{ $text }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <ul class="list-reset">
        @foreach ($posts as $post)
            <li class="py-4 border-b border-grey">
                <a class="text-grey-darkest hover:text-grey-darker no-underline leading-tight"
                   href="{{ $post->getPath() }}"
                >
                    <span class="text-xs">
                        {{ $post->formattedDate() }}
                    </span>
                    <br>
                    <span class="text-3xl">
                        {{ $post->title }}
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
