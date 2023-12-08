<nav class="navbar navbar-expand-md shadow-sm">
    <div class="container">
        @if (str_contains(Request::url(), 'show') == true)
            <a class="navbar-brand" href="{{ url('/berita') }}">
                <h2><-<- Back</h2>
            </a>
        @else
            <a class="navbar-brand" href="{{ url('/') }}">
                <h3>
                    {{ config('app.name', 'Beritainaja') }}<span class="fs-2 text-warning">.</span>
                </h3>
            </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto align-items-md-center">
                @if (str_contains(Request::url(), 'show') == true)
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ms-lg-5 ms-md-3">
                                <a class="btn btn-primary w-md-0 w-100" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item ms-md-2">
                                <a class="btn btn btn-outline-secondary w-md-0 w-100 mt-md-0 mt-2"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ms-lg-5 ms-md-3">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ auth()->user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    dashboard
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</nav>
