<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Nasabah</span>
    {{-- <div class="info">
      <a href="#" class="d-block">{{$post->email}}</a>
    </div> --}}
  </a>

    <!-- Sidebar -->

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{Route('selamat')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{Route('posts.index')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                CRUD Nasabah
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>