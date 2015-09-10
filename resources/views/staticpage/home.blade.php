@extends('layout.master')

@section('content')
  <h3>{{ trans('post.recent_post') }}</h3><hr>
  @foreach ($posts as $post)
    <div class="panel panel-info">
      <div class="panel-heading">
        <strong>{{ $post->title }}</strong><br>
        <small> {{ trans('post.author') }} : {{ $post->user->name }}</small>
      </div>
      <div class="panel-body">
        <em>{{ $post->content }}</em>
        <a href="{{ route('post.show', ['post' => $post]) }}" class="pull-right">{{ trans('post.show_post') }}</a>
      </div>
    </div>
  @endforeach
  {!! $posts->render() !!}
@endsection
