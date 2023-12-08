@include('layouts.frame.head')

<body>
    <div id="app">
        @include('components.theme')
        @auth
            @if (str_contains(Request::url(), 'berita') == true or
                    str_contains(Request::url(), 'kategori') == true or
                    str_contains(Request::url(), 'dashboard') == true)
                <main class="d-flex flex-nowrap">
                    @include('layouts.navbar.auth.sidenav')
                    <div class="container-lg p-0 ">
                        @include('layouts.navbar.auth.topnav')
                        <div class="container my-4">
                            @yield('content')
                        </div>
                    </div>
                </main>
            @else
                @include('layouts.navbar.guest.topnav')
                <main>
                    @yield('content')
                </main>
                @include('layouts.footer.guest.footer')
            @endif
        @endauth

        @guest
            @if (in_array(request()->route()->getName(),
                    ['login', 'register', 'password.request', 'password.email', 'password.reset']))
                <main>
                    @yield('content')
                </main>
            @else
                @include('layouts.navbar.guest.topnav')
                <main>
                    @yield('content')
                </main>
                @include('layouts.footer.guest.footer')
            @endif
        @endguest
    </div>

    @include('layouts.frame.foot')
</body>

</html>
