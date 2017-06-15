<div class="columns is-mobile">
    {{-- Reverse direction --}}
    @if ($reverse_direction)
        <div class="column is-4 is-offset-2">
            @if ($posts->currentPage() > 1)        
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Previous {{ $tag->tag }}
                </a>
            @endif
        </div>
        <div class="column is-4 has-text-right">
            @if ($posts->hasMorePages())
                <a href="{!! $posts->nextPageUrl() !!}">
                    Next {{ $tag->tag }}
                    <i class="fa fa-angle-right"></i>
                </a>
            @endif
        </div>
    @else
        <div class="column is-4 is-offset-2">
            @if ($posts->currentPage() > 1)        
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Newer {{ $tag ? $tag->tag : '' }}
                </a>  
            @endif
        </div>
        <div class="column is-4 has-text-right">
            @if ($posts->hasMorePages())
                <a href="{!! $posts->nextPageUrl() !!}">
                    Older {{ $tag ? $tag->tag : '' }}
                    <i class="fa fa-angle-right"></i>
                </a>
            @endif
        </div>
    @endif
</div>