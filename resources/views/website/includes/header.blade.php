<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md p-0">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('public/website') }}/images/logo-header.svg"
                    alt="logo" /></a>
            <button class="navbar-toggler p-0 text-white" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <div class="menu icon">
                        <svg xmlns="#" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                                d="M4 7h22M4 15h22M4 23h22"></path>
                        </svg>
                    </div>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('about') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('earning') }}">
                            Earning
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('user.register') }}">
                            Register
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('user.login') }}">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /.container -->
</header>
