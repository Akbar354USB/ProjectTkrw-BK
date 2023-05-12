<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">B-Konseling</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Bagian Admin</div>

    <!-- Nav Item - manage user -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Kelola User</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('siswa-index') }}">Siswa</a>
                <a class="collapse-item" href="{{ route('guru-index') }}">Guru</a>
                <a class="collapse-item" href="{{ route('kelas-index') }}">Kelas</a>
                <a class="collapse-item" href="{{ route('peraturan-index') }}">Peraturan</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Bagian pihak BK</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('peraturan-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Peraturan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riwayat-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span> Data Riwayat Pelanggaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pelanggaran-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Pelanggaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riwayat-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Laporan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Bagian Siswa</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pelanggaran-create') }}">
            <i class="fas fa-fw fa-wrench"></i
            <span>Lapor Pelanggaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riwayat-index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Riwayat Pelanggaran</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">Bagian Guru</div>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('pelanggaran-create') }}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Lapor Pelanggaran</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('riwayat-index') }}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Data Riwayat Pelanggaran</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Heading -->
        <div class="sidebar-heading">Bagian Kepsek</div>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('peraturan-index') }}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Daftar Laporan Masuk</span></a>
        </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>