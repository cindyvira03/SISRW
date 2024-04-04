<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }} ">
                    <i class="fa-regular fa-table-layout"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/warga') }}" class="nav-link {{ $activeMenu == 'warga' ? 'active' : '' }} ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Data Warga</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/surat') }}" class="nav-link {{ $activeMenu == 'surat' ? 'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>Arsip Surat</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/umkm') }}" class="nav-link {{ $activeMenu == 'umkm' ? 'active' : '' }} ">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Data UMKM</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/bansos') }}" class="nav-link {{ $activeMenu == 'bansos' ? 'active' : '' }} ">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>Penerima BANSOS</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/iuran') }}" class="nav-link {{ $activeMenu == 'iuran' ? 'active' : '' }} ">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Data Iuran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/laporan') }}" class="nav-link {{ $activeMenu == 'laporan' ? 'active' : '' }} ">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Laporan Keuangan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/pengaduan') }}" class="nav-link {{ $activeMenu == 'pengaduan' ? 'active' : '' }} ">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Pengaduan</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
