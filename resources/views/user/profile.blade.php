@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-md-4">
      <h3>{{ $user->name }}</h3>
      <em><a href="/post/create">{{ trans('post.new_post') }}</a></em>
    </div>
    <div class="col-md-8">
      <h3>{{ trans('post.new_feed') }}</h3><hr>
      @if($user->posts()->count())
        @foreach ($user->posts as $post)
          <div class="panel panel-info">
            <div class="panel-heading"><strong>{{ $post->title }}</strong></div>
            <div class="panel-body"><em>{{ $post->content }}</em></div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
@endsection
