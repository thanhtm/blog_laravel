<header class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a href="/" id="logo" class="navbar-brand">{{ trans('staticpage.app_name') }}</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/">{{ trans('staticpage.home') }}</a></li>
      <li><a href="/help">{{ trans('staticpage.help') }}</a></li>
      @if (Auth::guest())
        <li><a href="/auth/login">{{ trans('staticpage.log_in') }}</a></li>
      @else
        <li><a href="{{ route('user.show', ['user' => Auth::user()]) }}">{{ trans('auth.profile') }}</a></li>
        <li><a href="/auth/logout">{{ trans('staticpage.log_out') }}</a></li>
      @endif
    </ul>
  </div>
</header>
