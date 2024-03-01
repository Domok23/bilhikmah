<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-green-light shadow mx-lg-4 mt-lg-3 mx-2 mt-2"
        style="border-radius: 20px;">
        <div class="container-fluid align-items-center">
            <a href="/" class="brand-link navbar-brand">
                <img src="/img/logo-sidebar.png" alt="logo-sidebar" width="170px" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                {{-- <ul class="navbar-nav me-auto mb-2 mb-md-0"> --}}
                    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('/') || Request::is('beranda') ? 'active' : '' }}"
                                aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('alquran*') ? 'active' : '' }}"
                                aria-current="page" href="/alquran">Al-Qur'an</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('isyarat*') ? 'active' : '' }}"
                                aria-current="page" href="/isyarat">Isyarat</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('artikel*') ? 'active' : '' }}"
                                aria-current="page" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('video*') ? 'active' : '' }}"
                                aria-current="page" href="/video">Video</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn btn-outline-success fixed-width-nav-button {{ Request::is('poster*') ? 'active' : '' }}"
                                aria-current="page" href="/poster">Poster</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
</header>
