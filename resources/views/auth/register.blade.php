@extends('layout.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-left">
      <h3 class="text-center">{{ trans('staticpage.registration') }}</h3>
      @include('layout.error')
      <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <div>
          {{ trans('auth.name') }}
          <input type="tetx" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        <div>
          {{ trans('auth.email') }}
          <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div>
          {{ trans('auth.password') }}
          <input type="password" name="password" class="form-control">
        </div>
        <div>
          {{ trans('auth.password_confirmation') }}
          <input type="password" name="password_confirmation" class="form-control"><br>
        </div>
        <div>
          <button type="submit" class="btn btn-success btn-block">{{ trans('staticpage.register') }}</button>
        </div>
      </form>
    </div>
  </div>
@endsection
