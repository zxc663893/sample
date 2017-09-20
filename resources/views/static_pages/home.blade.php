@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h3>微博列表</h3>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
    @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p class="lead">
        你现在看到的是 <a href=href="https://laravel-china.org/laravel-tutorial/5.1">laravel 入门教程</a>的项目主页。
      </p>
      <p>
        永远相信，美好的事情即将发生。
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
      </p>
    </div>
  @endif
@stop
