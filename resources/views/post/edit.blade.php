@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-left">
      <h2 class="text-center">{{ trans('post.edit_post') }}</h2>
      @include('layout.error')
      <form action="{{ route('post.update', ['post' => $post]) }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">
        <div>
          {{ trans('post.title') }}
          <input type="text" class="form-control" name="title" value="{{ $post->title }}">
        </div>
        <div>
          {{ trans('post.content') }}
          <textarea rows="5" class="form-control" name="content" value="{{ old('content') }}">
            {{ $post->content }}
          </textarea><br>
        </div>
        <div>
          <button type="submit" class="btn btn-success btn-block">{{ trans('action.update') }}</button>
        </div>
      </form>
      <a href="{{ route('user.show', ['user' => Auth::user()]) }}">{{ trans('action.back') }}</a>
    </div>
  </div>
@endsection
