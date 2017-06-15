@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title', \Canvas\Models\Settings::blogTitle().' | '.$post->title)
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif

@section('content')
    <section class="section">
        <article>
            <div class="columns" id="post">
                <div class="column is-8 is-offset-2">
                    
                    @if ($post->page_image)
                        <figure class="image">
                            <img src="{{ asset($post->page_image) }}">
                        </figure>
                    @endif

                    <h1 class="post-page-title">{{ $post->title }}</h1>
                    <p class="post-page-meta">
                        {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                        @if ($post->tags->count())
                            <br>
                            {!! join(' ', $post->tagLinks()) !!}
                        @endif
                    </p>

                    {!! $post->content_html !!}
 
                    <p class="dts"><span>&#183;</span><span>&#183;</span><span>&#183;</span></p>

                    @include('canvas::frontend.blog.partials.author')
                </div>
            </div>
        </article>

        @include('canvas::frontend.blog.partials.paginate-post')
    </section>
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection