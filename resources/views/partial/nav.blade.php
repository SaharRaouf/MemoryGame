<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class= "sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Spelifierat lärande!</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Hem</a></li>
                <li><a href="/project">Projekt</a></li>
                <li><a href="/videos">Lektioner</a></li>
                <li><a href="/train">Frågesport</a></li>
                <li><a href="/inquiry">Enkät</a></li>
                <li><a href="/memoryGame">Spel</a></li>

                @if(\Auth::user() && \Auth::user()->isAdmin())
                    <li class="dropdown">
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                    <li><a href="{{ url('admin/questions') }}"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Questions</a></li>
                    <li><a href="{{ url('admin/topics') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Topics</a></li>
                    <li><a href="{{ url('admin/base-topics') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Base Topics</a></li>
                    <li><a href="{{ url('admin/users') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a></li>
                    <li><a href="{{ url('admin/email-list') }}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email list</a></li>
                    {{--</ul>--}}
                    </li>

                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ Auth::user()->avatar }}" style="width:22px; border: 1px solid #dddddd;"> {{ Auth::user()->anyName() }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>