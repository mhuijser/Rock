<section class="hero is-primary is-small is-bold">

  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left nav-menu">
          <a class="nav-item @if(Route::current()->getName() == 'canvas.blog.post.index') is-active @endif" href="{!! route('canvas.blog.post.index') !!}">
            Home
          </a>
        </div>
        <div class="nav-right nav-menu">

          <span class="nav-item">
            @if (!empty($socialHeaderIconsUser->twitter))
                <a href="http://twitter.com/{{ $socialHeaderIconsUser->twitter }}" target="_blank" id="social"><i class="fa fa-fw fa-twitter text-muted icon is-small"></i></a>
            @endif
            @if (!empty($socialHeaderIconsUser->facebook))
                <a href="http://facebook.com/{{ $socialHeaderIconsUser->facebook }}" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted icon is-small"></i></a>
            @endif
            @if (!empty($socialHeaderIconsUser->github))
                <a href="http://github.com/{{ $socialHeaderIconsUser->github }}" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted icon is-small"></i></a>
            @endif
            @if(!empty($socialHeaderIconsUser->linkedin))
                <a href="http://linkedin.com/in/{{ $socialHeaderIconsUser->linkedin }}" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted icon is-small"></i></a>
            @endif
            
          </span>
        </div>
      </div>
    </header>
  </div>
  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
        <h1 class="title ">
            <a class="is-brand"
               href="{!! route('canvas.blog.post.index') !!}">{{ \Canvas\Models\Settings::blogTitle() }}</a>
        </h1>
        <h2 class="subtitle">
            {{ \Canvas\Models\Settings::blogSubTitle() }}
        </h2>

    </div>
  </div>
</section>

