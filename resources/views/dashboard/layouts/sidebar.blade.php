<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="/img/logo.png" alt="logo-sidebar" class="brand-image">
        <span class="brand-text font-weight-light">BilHikmah</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active bg-success' : '' }}" href="/dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/isyarat*') ? 'active bg-success' : '' }}"
                        href="/dashboard/isyarat">
                        <i class="nav-icon fas fa-hand-paper"></i>
                        <p>Bahasa Isyarat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/artikel*') ? 'active bg-success' : '' }}"
                        href="/dashboard/artikel">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/poster*') ? 'active bg-success' : '' }}"
                        href="/dashboard/poster">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Poster</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/video*') ? 'active bg-success' : '' }}"
                        href="/dashboard/video">
                        <i class="nav-icon far fa-image"></i>
                        <p>Video</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active bg-success' : '' }}"
                        href="/dashboard/kategori">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/user*') ? 'active bg-success' : '' }}"
                        href="/dashboard/user">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
