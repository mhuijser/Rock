
    <div class="columns is-mobile">
        @if ($tag && $tag->reverse_direction)
            <div class="column is-4 is-offset-2">
                @if ($post->olderPost($tag))
                    <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                        <i class="fa fa-angle-left fa-lg"></i>
                        Previous {{ $tag->tag }}
                    </a>
                @endif
            </div>
            <div class="column is-4 has-text-right">
                @if ($post->newerPost($tag))
                    <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                        Next {{ $tag->tag }}
                        <i class="fa fa-angle-right"></i>
                    </a>
                @endif
            </div>
        @else
            <div class="column is-4 is-offset-2">
                @if ($post->newerPost($tag))
                    <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                        <i class="fa fa-angle-left fa-lg"></i>
                        Newer
                    </a>
                @endif
            </div>
            <div class="column is-4 has-text-right">
                @if ($post->olderPost($tag))
                    <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                        Older
                        <i class="fa fa-angle-right"></i>
                    </a>
                @endif
            </div>
        @endif
    </div>
