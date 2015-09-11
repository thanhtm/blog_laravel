@extends('layout.master')

@section('content')
  <h3>{{ $post->title }}</h3>
  @can('update-post', $post)
    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary">{{ trans('action.edit') }}</a>
  @endcan
  @can('delete-post', $post)
    <form action="{{ route('post.destroy', ['id' =>$post->id]) }}" method="post">
      {!! csrf_field() !!}
      <input type="hidden" name="_method" value="delete">
      <button type="submit" class="btn btn-danger" onclick="return confirm('{{ trans('action.confirm') }}');">
        {{ trans('action.delete') }}
      </button>
    </form>
  @endcan
  <em>{{ trans('post.author') }} : {{ $post->user->name }}</em><br>
  <em>{{ trans('post.created_at') }} : {{ $post->created_at }}</em>
  <h4>{{ trans('post.content') }} :</h4>
  <p>{{ $post->content }}</p><hr>
  <h4>{{ trans('post.all_comment') }}</h4>
  @if($post->comments()->count())
    @foreach ($post->comments as $comment)
      <div>
        <strong>{{ $comment->user->name }}</strong> :
        <em>{{ $comment->content }}</em>
        @can('delete-comment', $comment)
          <a href="#" class="pull-right">{{ trans('action.delete') }}</a><br>
        @endcan
      </div>
    @endforeach
  @endif
  <h4>{{ trans('post.new_comment') }}</h4>
  <form method="POST" action="{{ route('post.comments.store',['postId' => $post->id]) }}">
    {!! csrf_field() !!}
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div>
      <textarea name="content" value="{{ old('content') }}" class="form-control">
      </textarea>
    </div><br>
    <button class="btn btn-primary pull-right" type="submit">{{ trans('post.comment') }}</button>
  </form>
@endsection
