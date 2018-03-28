@extends('layouts.default')
@section('title', '注册')

@section('content')
<div class="row justify-content-md-center">
    <!-- Card -->
<div class="card col-md-6">

        <!-- Card body -->
        <div class="card-body">

            <!-- Default form subscription -->
            <form method="POST" action="{{ route('users.store') }}">
                <p class="h4 text-center py-4">注册</p>
                @include('shared._errors')
                {{ csrf_field() }}

                <!-- Default input name -->
                <label for="name" class="grey-text font-weight-light float-left">名称：</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                <br>

                <!-- Default input email -->
                <label for="email" class="grey-text font-weight-light float-left">邮箱：</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                <br>

                <!-- Default input password -->
                <label for="password" class="grey-text font-weight-light float-left">密码：</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">

                <br>

                <!-- Default input password confirmation -->
                <label for="password_confirmation" class="grey-text font-weight-light float-left">确认密码：</label>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">

                <div class="text-center py-4 mt-3">
                    <button class="btn btn-outline-primary" type="submit">注册<i class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>
            <!-- Default form subscription -->

        </div>
        <!-- Card body -->

    </div>
    <!-- Card -->
</div>
@stop