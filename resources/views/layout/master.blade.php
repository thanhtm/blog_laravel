<!DOCTYPE html>
<html>
<head>
  <title>{{ trans('staticpage.app_name') }}</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
  @yield('style')
</head>
<body>
  @include('layout.header')
  <div class="container">
    @yield('content')
    @include('layout.footer')
  </div>
</body>
</html>
