@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-left">
      <h2 class="text-center">{{ trans('post.new_post') }}</h2>
      @include('layout.flash')
      <form method="POST" action="{{ route('post.store') }}">
        {!! csrf_field() !!}
        <div>
          {{ trans('post.title') }}
          <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>
        <div>
          {{ trans('post.content') }}
          <textarea rows="5" class="form-control" name="content" value="{{ old('content') }}">
          </textarea><br>
        </div>
        <div>
          <button type="submit" class="btn btn-success btn-block">{{ trans('action.create') }}</button>
        </div>
      </form>
      <a href="{{ route('user.show', ['user' => Auth::user()]) }}">{{ trans('action.back') }}</a>
    </div>
  </div>
@endsection
