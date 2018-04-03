@extends('layouts.default')
@section('title', '更新密码')

@section('content')
<div class="row justify-content-md-center">

    <!-- Card -->
    <div class="card col-md-6">

        <!-- Card body -->
        <div class="card-body">

            <!-- Default form substription -->
            <form action="{{ route('password.update') }}" method="POST">
                {{ csrf_field() }}

                <p class="h4 text-center py-4">更新密码</p>

                @if (session('status'))
                    <div class="alert alert-success text-left">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->has('email'))
                    <div class="alert alert-danger text-left">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                @if ($errors->has('password'))
                    <div class="alert alert-danger text-left">
                        {{ $errors->first('password') }}
                    </div>
                @endif

                @if ($errors->has('password_confirmation'))
                    <div class="alert alert-danger text-left">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif

                <input type="hidden" name="token" value="{{ $token }}">

                <!-- Default input email -->
                <label for="email" class="grey-text font-weight-light float-left">邮箱地址：</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $email or old('email') }}" required autofocus>

                <br>

                <!-- Default input password -->
                <label for="password" class="grey-text font-weight-light float-left">密码：</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">

                <br>

                <!-- Default input password confirmation -->
                <label for="password-confirm" class="grey-text font-weight-light float-left">确认密码：</label>
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>

                <div class="text-center py-4 mt-3">
                    <button type="submit" class="btn btn-outline-primary">修改密码 <i class="fa fa-edit fa-3x ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop