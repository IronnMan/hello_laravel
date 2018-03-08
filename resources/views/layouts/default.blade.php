<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel App') - Laravel 新手入门手册</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
    @include('layouts._footer')
        </div>
    </div>

    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.13.0/esm/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <script src="https://cdn.bootcss.com/mdbootstrap/4.5.0/js/mdb.js"></script>
    {{--  <script src="/js/app.js"></script>  --}}
</body>
</html>