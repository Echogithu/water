
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Water App') - 水质监测系统</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/js/app.js">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/login.js"></script>
    <script type="text/javascript" src="/js/canvas-particle.js"></script>
  </head>
  <body>
    <!-- 头部Begin -->
    @include('layouts._header')
    <!-- 头部End -->
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>
