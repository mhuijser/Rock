<section class="section">

    @foreach ($posts as $post)

        <div class="columns">
<!--             <div class="column is-2 is-offset-2">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <figure class="image">
                                <img src="{{ asset($post->page_image) }}">
                            </figure>
                        </div>
                    </div>
                </article>
            </div> -->
            <div class="column is-8 is-offset-2">
                <article class="media">

                    <figure class="media-left">
                        <p class="image is-128x128">
                            @if ($post->page_image)
                                <img src="{{ asset($post->page_image) }}">
                            @endif
                        </p>
                    </figure>

                    <div class="media-content">
                        <div class="content">
                            <h2><a href="{{ $post->url($tag) }}">{{ $post->title }}</a></h2>
                            <p class="post-page-meta">
                                {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                            </p>
                            {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }} 
                            <br>
                            <small><a href="{{ $post->url($tag) }}">READ MORE...</a></small>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    @endforeach

</section>
