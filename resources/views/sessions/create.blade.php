@extends('layouts.default')
@section('title', '登录')
@section('content')
<div class="row justify-content-md-center">
    <!-- Card -->
    <div class="card col-md-6">
        <!-- Card body -->
        <div class="card-body">
            <!-- Default form subscription -->
            <form method="POST" action="{{ route('login') }}">
                <p class="h4 text-center py-4">登录</p>

                @include('shared._errors')
                {{ csrf_field() }}

                <!-- Default input email -->
                <label for="email" class="grey-text font-weight-light float-left">邮箱：</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                <br>

                <!-- Default input password -->
                <label for="password" class="grey-text font-weight-light float-left">密码：</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">

                <br>

                <!-- Filled-in checkbox -->
                <div class="form-check float-left">
                    <input type="checkbox" class="filled-in form-check-input" id="Checkbox" name="remember">
                    <label class="form-check-label" for="Checkbox">自动登录</label>
                </div>


                <div class="text-center py-4 mt-3">
                    <button class="btn btn-outline-primary" type="submit">登录<i class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>
            <!-- Default form subscription -->

            <hr>

            <p>还没有账号？<a href="{{ route('signup') }}">现在注册！</a></p>
        </div>
        <!-- Card body -->
    </div>
    <!-- Card -->
</div>
@stop