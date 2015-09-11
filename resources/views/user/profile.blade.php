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
            <div class="panel-heading">
              <strong>{{ $post->title }}</strong>
              @can('delete-post', $post)
                <form action="{{ route('post.destroy', ['id' =>$post->id]) }}" method="post" class="pull-right">
                  {!! csrf_field() !!}
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn btn-link" onclick="return confirm('{{ trans('action.confirm') }}');">
                    {{ trans('action.delete') }}
                  </button>
                </form>
              @endcan
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
      @endif
    </div>
  </div>
@endsection
