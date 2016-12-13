<nav class="navbar navbar-default">
    <div class="container-fluid" class="navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand {{ Request::is('/') ? "active" : "" }}" href="{{ URL::to('/') }}"><img src="/src/images/logo.png" alt="Your logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="{{ URL::to('/blog') }}">Blog <span class="sr-only">(current)</span></a></li>
                    <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ URL::to('/about') }}">About</a></li>
                    <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ URL::to('/contact') }}">Contact</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Hello {{Auth::user()->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('posts.index')}}">Posts</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul><!-- end of ul-->
                        </li><!-- end of li-->
                     @else
                        <a href="{{route('login')}}" class="btn btn-default navbar-btn">Login</a>
                        <a href="{{route('register')}}" class="btn btn-default navbar-btn">Register</a>
                    @endif
                </ul><!-- end of ul-->
            </div><!-- /.nav bar-collapse -->
        </div><!-- /.end container-->
    </div><!-- /.container-fluid -->
</nav>