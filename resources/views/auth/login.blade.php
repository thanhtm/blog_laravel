@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-left">
      <h2 class="text-center">{{ trans('staticpage.log_in') }}</h2>
      @include('layout.error')
      <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <div>
          <input type="email" name="email" value="{{ old('email') }}"
            placeholder="{{ trans('auth.email') }}" class="form-control"><br>
        </div>
        <div>
          <input type="password" name="password" id="password"
            placeholder="{{ trans('auth.password') }}" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-success btn-block">{{ trans('staticpage.log_in') }}</button>
        </div>
      </form>
      <a href="/auth/register">{{ trans('staticpage.register') }}</a>
    </div>
  </div>
@endsection
