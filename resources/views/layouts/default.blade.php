<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel App') - Laravel 新手入门手册</title>
    <!-- mdbootstrap 所需的图标字体库 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End -->
    <!-- 这是一个收费的字体库，无需添加 -->
    <link href='http://cdn.webfont.youziku.com/webfonts/nomal/116403/144/5ac90c70f629d90d947c3f1a.css' rel='stylesheet' type='text/css' />
    <!-- End -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-md-auto">
                @include('shared._messages')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>
    </div>
    
    <!-- mdbootstrap 所需的 js 文件 -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.13.0/esm/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <script src="https://cdn.bootcss.com/mdbootstrap/4.5.0/js/mdb.js"></script>
    <!-- End -->
    {{--  <script src="/js/app.js"></script>  --}}
</body>
</html>
