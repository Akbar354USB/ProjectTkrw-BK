{{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user-profile') }}">
            <i class="fas fa-fw fa-solid fa-user"></i>
            <span>Profile</span></a>
    </li>
    


    @if (Auth::user()->role == "ADMIN")
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
    @endif
    

    @if (Auth::user()->role == "PIHAK BK")
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
    @endif
    

    @if (Auth::user()->role == "SISWA")
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
    @endif
    
    
    @if (Auth::user()->role == "GURU")
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
    @endif
    
    @if (Auth::user()->role == "KEPSEK")
     <li class="nav-item">
         <a class="nav-link" href="{{ route('peraturan-index') }}">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Daftar Laporan Masuk</span></a>
     </li>
    @endif
       
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul> --}}


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      {{-- <i class="fas fa-laugh-wink"></i> --}}
      <span class="brand-text font-weight-light">B-<b>Konseling</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/' . auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h5 class="d-block text-white">{{auth()->user()->name}}</h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user-profile') }}" class="nav-link">
              <i class="nav-icon fas fa-fw fa-solid fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          @if (Auth::user()->role == "ADMIN")
          <li class="nav-item">
            <a href="{{ route('user-index') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-users"></i>
              <p>
                Manage User
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kelola Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ route('kelas-index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('siswa-index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('guru-index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('peraturan-index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peraturan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if (Auth::user()->role == "SISWA")
          <li class="nav-item">
            <a href="{{ route('pelanggaran-create') }}" class="nav-link">
              <i class="nav-icon fas far fa-user-edit"></i>
              {{-- <i class="far fa-user-edit"></i> --}}
              <p>
                Lapor Pelanggaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('riwayat-index') }}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Riwayat Pelanggaran
              </p>
            </a>
          </li>
          @endif

          @if (Auth::user()->role == "PIHAK BK")
          <li class="nav-item">
            <a href="{{ route('peraturan-index') }}" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Data Peraturan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('riwayat-index') }}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Data Riwayat
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('pelanggaran-index') }}" class="nav-link">
              <i class="nav-icon fas fa-exclamation-triangle"></i>
              <p>
                Data Pelanggaran
              </p>
            </a>
          </li>
          @endif


          @if (Auth::user()->role == "ADMIN")
          <li class="nav-item">
            <a href="{{ route('user-index') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              {{-- <i class="fas fa-clipboard-list"></i> --}}
              <p>
                Data Laporan
              </p>
            </a>
          </li>
          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>