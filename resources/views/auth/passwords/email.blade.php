@extends('layouts.default')
@section('title', '重置密码')

@section('content')
<div class="row justify-content-md-center">

    <!-- Card -->
    <div class="card col-md-6">

        <!-- Card body -->
        <div class="card-body">

            <!-- Default form substription -->
            <form action="{{ route('password.email') }}" method="POST">
                <p class="h4 text-center py-4">重置密码</p>

                {{ csrf_field() }}

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

                <!-- Default input email -->
                <label for="email" class="grey-text font-weight-light float-left">邮箱地址：</label>
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>

                <div class="text-center py-4 mt-3">
                    <button type="submit" class="btn btn-outline-primary">发电子邮件 <i class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop