@extends('components.layout')

@section('banner')

    <h1>MY Blog</h1>

@endsection

@section('content')

    @foreach ($posts as $post)

        <article class="{{$loop->even ? 'foobar' : ''}}">

            <h1>
                <a href="/posts/{{$post->slug}}">

                    {{$post->title}}

                </a>
            </h1>

            <div>
                {{$post->excerpt}}
            </div>

        </article>

    @endforeach



@endsection
