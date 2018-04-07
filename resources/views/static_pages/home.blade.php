@extends('layouts.default')

@section('content')

    @if (Auth::check())
    <div class="row justify-content-md-center">

        <div class="col-md-8 mb-4">
            <div class="card mb-3 wow fadeIn" style="visibility:visible;animation-name:fadeIn;">
                <div class="card-body">
                    @include('shared._status_form')
                </div>
            </div>

            <div class="card mb-3 wow fadeIn" style="visibility:visible;animation-name:fadeIn;">
                <div class="card-header font-weight-bold">最新动态</div>

                @include('shared._feed')
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
            @include('shared._user_info', ['user' => Auth::user()])
        </div>
    </div>
    @else
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://github.com/IronnMan/hello_laravel">Laravel 入门教程</a> 的示例主页。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
    @endif
@stop