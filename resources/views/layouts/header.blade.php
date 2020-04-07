<div class="container content-container page-content-container main-header-section">

    <nav class="nav navbar bg-faded">

        <div class="mr-auto">
            <a class="nav-link" role="button" href="{{ url( '/' ) }}">Quizzes</a>
        </div>

        @if (Auth::guest())
            <a class="nav-link" role="button" href="{{ route('login') }}">Login</a>
            <a class="nav-link" role="button" href="{{ route('register') }}">Register</a>

        @else
            @if (Auth::user()->is_admin == "1")
                <li class="nav-item">
                    <a class="nav-link navlink" href="{{ url( '/admin' ) }}" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link navlink" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    Logout
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>

            </li>
        @endif

    </nav>

</div>