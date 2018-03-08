<header>
    <nav class="navbar navbar-expand-lg navbar-dark black">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><strong>LaravelApp</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('help') }}">帮助 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{--
    <div class="col-md-offset-1 col-md-10">
        <nav class="nav navbar-nav navbar-right">
            <li><a href="{{ route('help') }}">帮助</a></li>
            <li><a href="#">登录</a></li>
        </nav>
    </div> --}}
</header>