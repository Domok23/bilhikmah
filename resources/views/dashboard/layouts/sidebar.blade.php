<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link">
        <img src="/img/logo.png" alt="logo-sidebar" class="brand-image">
        <span class="brand-text font-weight-bolder">{{ env('APP_NAME') }}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()->role === 'superadmin')
                <img src="{{ asset('img/superadmin.png') }}" class="img-circle elevation-2" alt="Super Admin Image">
                @elseif(auth()->user()->role === 'admin')
                <img src="{{ asset('img/admin.png') }}" class="img-circle elevation-2" alt="Admin Image">
                @else
                <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" class="d-block">{{
                    auth()->user()->nama }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fa-solid fa-magnifying-glass fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active bg-success' : '' }}" href="/dashboard">
                        <i class="nav-icon fa-solid fa-gauge-high"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/isyarat*') ? 'active bg-success' : '' }}"
                        href="/dashboard/isyarat">
                        <i class="nav-icon fa-solid fa-hand"></i>
                        <p>Bahasa Isyarat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/artikel*') ? 'active bg-success' : '' }}"
                        href="/dashboard/artikel">
                        <i class="nav-icon fa-solid fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/poster*') ? 'active bg-success' : '' }}"
                        href="/dashboard/poster">
                        <i class="nav-icon fa-solid fa-image"></i>
                        <p>Poster</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/video*') ? 'active bg-success' : '' }}"
                        href="/dashboard/video">
                        <i class="nav-icon fa-solid fa-clapperboard-play"></i>
                        <p>Video</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active bg-success' : '' }}"
                        href="/dashboard/kategori">
                        <i class="nav-icon fa-solid fa-list"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                @if(auth()->user()->role === 'superadmin')
                <li class="nav-header">Administrator</li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/user*') ? 'active bg-success' : '' }}"
                        href="/dashboard/user">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>Data Admin</p>
                    </a>
                </li>
                @endif
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/api-docs*') ? 'active bg-success' : '' }}"
                        href="/dashboard/api-docs">
                        <i class="nav-icon fas fa-fire"></i>
                        <p>Dokumentasi API</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <div class="sidebar-custom">
        <a href="/dashboard/api-docs" class="btn btn-link-success "><i class="fa-duotone fa-fire"></i> <span
                class="brand-text font-weight-light">Dokumentasi API</span></a>
    </div>
</aside>
