<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Water App') - 水质监测系统</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/js/app.js">
  </head>
  <body>
    <!-- 头部Begin -->
    @include('layouts._header')
    <!-- 头部End -->
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>

