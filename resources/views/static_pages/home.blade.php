
@extends('layouts.default')


@section('content')
    <div class="jumbotron">
        <h1>hello laravel</h1>
        <p class="lead">
            你现在看到的是<a href="about.blade.php">laravel入门教程</a>
        </p>
        <p>
           一切从这里开始
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
        </p>
    </div>
@stop