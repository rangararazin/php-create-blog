<x-layout>
    <article>
        <h1>
            {{$post->title}}
        </h1>

        <div>
            {!!  $post->body !!}
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>

{{--@extends('components.layout')--}}

{{--@section('content')--}}
{{--    <article>--}}
{{--        <h1>--}}
{{--            {{$post->title}}--}}
{{--        </h1>--}}

{{--        <div>--}}
{{--            {!!  $post->body !!}--}}
{{--        </div>--}}
{{--    </article>--}}

{{--    <a href="/">Go back</a>--}}

{{--@endsection--}}


