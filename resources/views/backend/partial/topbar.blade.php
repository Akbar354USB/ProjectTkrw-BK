<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
          <button class="btn btn-sm btn-primary">
            Logout
            <i class="nav-icon fas fa-sign-out-alt"></i>
          </button>
      </form>
    </li>
  </ul>
</nav>