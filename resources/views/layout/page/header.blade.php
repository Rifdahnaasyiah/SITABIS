<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo3.png" alt="SITABIS Logo">
        </a>

        <!-- Navigation -->
        <nav id="navmenu" class="navmenu d-none d-lg-block">
            <ul class="d-flex align-items-center">
                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Nav Toggle -->
        <i class="mobile-nav-toggle d-lg-none bi bi-list"></i>

        <!-- Login Button -->
        <a class="btn-getstarted" href="{{ url('/login') }}">Login</a>

    </div>
</header>
