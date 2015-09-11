@extends('layout.master')

@section('content')
  <h3>{{ trans('post.recent_post') }}</h3><hr>
  @foreach ($posts as $post)
    <div class="panel panel-info">
      <div class="panel-heading">
        @can('delete-post', $post)
          <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="post" class="pull-right">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-link" onclick="return confirm('{{ trans('action.confirm') }}');">
              {{ trans('action.delete') }}
            </button>
          </form>
        @endcan
        <strong>{{ $post->title }}</strong><br>
        <small> {{ trans('post.author') }} : {{ $post->user->name }}</small>
      </div>
      <div class="panel-body">
        <em>{{ $post->content }}</em>
        <div class="pull-right">
          <a href="{{ route('post.show', ['post' => $post]) }}">{{ trans('post.show_post') }}</a>
          @can('update-post', $post)
            - <a href="{{ route('post.edit', ['id' => $post->id]) }}">{{ trans('action.edit') }}</a>
          @endcan
        </div>
      </div>
    </div>
  @endforeach
  {!! $posts->render() !!}
@endsection
