<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title') | Endless - Premium Admin Template</title>
    @include('authentication.layouts.style')
  </head>
  <body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper box-layout">
      <!-- Page Body Start-->
      @yield('content')
      <!-- Page Body End-->
    </div>
    <!-- page-wrapper End-->
    @include('authentication.layouts.script')
  </body>
</html>
