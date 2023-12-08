<div class="navbar-expand-lg bg-dark border-end">
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offSidenav" aria-labelledby="offSidenavLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offSidenavLabel"></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark h-auto mx-lg-0 mx-auto"
                style="min-width: 280px; min-height: 100vh;">
                <a href="/"
                    class="align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <h2>Beritainaja<span class="h1 text-warning">.</span></h2>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-5">
                    <li>
                        <a href="/dashboard"
                            class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="/berita"
                            class="nav-link text-white {{ str_contains(Request::url(), 'berita') == true ? 'active' : '' }}">
                            <i class="bi bi-newspaper me-2"></i>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="/kategori"
                            class="nav-link text-white {{ str_contains(Request::url(), 'kategori') == true ? 'active' : '' }}">
                            <i class="bi bi-tags-fill me-2"></i>
                            Kategori Berita
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>{{ auth()->user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
