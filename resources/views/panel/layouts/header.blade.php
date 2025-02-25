<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion">

    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
            data-feather="menu"></i></button>

    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="">LMS_V1</a>

    <form class="form-inline me-auto d-none d-lg-block me-3">
        <div class="input-group input-group-joined input-group-solid">
            <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-text"><i data-feather="search"></i></div>
        </div>
    </form>
    <!-- Navbar Items-->
    @if (Route::has('login'))
        @auth

            <form method="POST" class=" " action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-info" target="_self">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary"
                target="_self">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn"
                    target="_self">Register</a>
            @endif
        @endauth
    @endif

</nav>
