
@if (isset($tag->title))
	<div class="columns">
		<div class="column is-offset-2 is-8">
		    <hr>
		    <p class="tag-link"><i class="fa fa-fw fa-tag"></i> Tagged in <a href="#">{{ $tag->title or '' }}</a></p>
		    <p class="tag-subtitle">" {{ $tag->subtitle }} "</p>
		    <hr>
		</div>
    </div>
@endif
