@extends('layouts.default')
@section('title', '更新个人资料')
@section('content')
<div class="row justify-content-md-center">
    <!-- Card -->
    <div class="card col-md-6">
        <!-- Card body -->
        <div class="card-body">
            <!-- Default form subscription -->
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                <p class="h4 text-center py-4">更新个人资料</p>
                @include('shared._errors')
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="avatar mx-auto white">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('120') }}" class="rounded-circle img-fluid" alt="{{ $user->name }}">
                    </a>
                </div>

                <!-- Default input name -->
                <label for="name" class="grey-text font-weight-light float-left">名称：</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">

                <br>

                <!-- Default input email -->
                <label for="email" class="grey-text font-weight-light float-left">邮箱：</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>

                <br>

                <!-- Default input password -->
                <label for="password" class="grey-text font-weight-light float-left">密码：</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">

                <br>

                <!-- Default input password confirmation -->
                <label for="password_confirmation" class="grey-text font-weight-light float-left">确认密码：</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">

                <div class="text-center py-4 mt-3">
                    <button class="btn btn-outline-primary" type="submit">更新<i class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>
            <!-- Default form subscription -->
        </div>
        <!-- Card body -->
    </div>
    <!-- Card -->
</div>
@stop