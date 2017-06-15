<section class="section">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
</section>

<section class="hero is-primary is-small is-bold">
  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
        <!-- 
          Well, you can add your favourite quote here by yourself, or
          uncomment one below.
        -->

        <h2 class="subtitle">"When my heart is <strong>overwhelmed</strong>, lead me to the <strong>Rock</strong> that is higher than I"</h2>
        <h5>Psalms 61</h5>
        
        <!--
        <h2 class="subtitle">When the solution is simple, <strong>God is answering</strong>.</h2>
        <h5>Albert Einstein</h5>
        -->
        
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
		<small>Proudly powered by <a href="https://canvas.toddaustin.io" target="_blank">Canvas</a> &#183; </small>
      </p>
      <p>
      	<small><a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock icon is-small" style="font-size: 14px; padding-top:12px;"></i><i>Sign in</i></a></small>
      </p>
    </div>
  </div>
</footer>

<!-- scroll to top button -->
<div id="top-link-block" class="hidden hover-button"">
  <a id="scroll-to-top" href="#top" class="button is-primary is-small is-pulled-right">SCROLL TO TOP</a>
</div>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif
