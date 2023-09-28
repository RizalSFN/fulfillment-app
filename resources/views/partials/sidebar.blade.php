<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light border-end shadow" id="sidenavAccordion">
        <div class="sb-sidenav-menu mt-4">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu
                    <hr class="bg-secondary" style="height: 2px;">
                </div>
                <a class="nav-link {{ $title == 'dashboard' ? 'myActive' : '' }}" style="margin-top: -25px;"
                    href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i
                            class="bi bi-house-fill fs-5 {{ $title == 'dashboard' ? 'myActiveIcon' : '' }}"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Management
                    <hr class="bg-secondary" style="height: 2px;">
                </div>
                <a class="nav-link {{ $title == 'users' ? 'myActive' : '' }}" style="margin-top: -25px;" href="/users">
                    <div class="sb-nav-link-icon"><i
                            class="bi bi-person-fill fs-5 {{ $title == 'users' ? 'myActiveIcon' : '' }}"></i></div>
                    Users
                </a>
                <a class="nav-link {{ $title == 'product' ? 'myActive' : '' }}" href="#">
                    <div class="sb-nav-link-icon"><i
                            class="bi bi-boxes fs-5 {{ $title == 'product' ? 'myActiveIcon' : '' }}"></i>
                    </div>
                    Product
                </a>
                <div class="sb-sidenav-menu-heading">Setiings
                    <hr class="bg-secondary" style="height: 2px;">
                </div>
                <a class="nav-link {{ $title == 'account' ? 'myActive' : '' }}" style="margin-top: -25px;"
                    href="charts.html">
                    <div class="sb-nav-link-icon"><i
                            class="bi bi-person-fill-gear fs-5 {{ $title == 'account' ? 'myActiveIcon' : '' }}"></i>
                    </div>
                    Account
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-right fs-5"></i></div>
                    Logout
                </a>
            </div>
        </div>
    </nav>
</div>
