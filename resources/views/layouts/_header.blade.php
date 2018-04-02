<header>
    <nav class="navbar navbar-expand-lg navbar-dark black">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><strong>LaravelApp</strong></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto"></div>
                <ul class="navbar-nav mr-right">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">用户列表</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a class="text-left font-weight-normal" href="{{ route('users.show', Auth::user()->id) }}">个人中心</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="font-weight-normal" href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a>
                            </li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li>
                                <a class="d-flex justify-content-center" href="#" id="logout">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('help') }}">帮助 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">登录</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>