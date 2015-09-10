@extends('layout.master')

@section('content')
  <h3>{{ $post->title }}</h3>
  <em>{{ trans('post.author') }} : {{ $post->user->name }}</em><br>
  <em>{{ trans('post.created_at') }} : {{ $post->created_at }}</em>
  <h4>{{ trans('post.content') }} :</h4>
  <p>{{ $post->content }}</p>
@endsection
