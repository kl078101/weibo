@extends('layouts.default')

@section('content')

  <div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a> 的示例项目主页。</p>
    <hr class="my-4">
    <p>一切，将从这里开始。</p>
    <a class="btn btn-primary btn-lg" href="{{ route('signup') }}" role="button">现在注册</a>
  </div>
@stop
