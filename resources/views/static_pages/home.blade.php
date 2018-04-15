@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>ISMTA-水质监测系统</h1>
    <p class="lead">
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-info" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>
@stop