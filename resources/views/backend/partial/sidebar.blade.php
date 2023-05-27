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
            <a href="{{ route('laporan-index') }}" class="nav-link">
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