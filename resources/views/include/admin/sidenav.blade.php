
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
      
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src={{asset('img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"> {{ ucfirst(Auth::guard('admin')->user()->name) }}
            </a>
            </div>
          </div>
    
        
          <!-- Sidebar Menu -->
          
          <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
     
      <li class="nav-item">
        <a href="pages/widgets.html" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
            {{-- <span class="right badge badge-danger">New</span> --}}
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="pages/widgets.html" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Product
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin.logout') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
  
     </ul>
     
    </ul>
  </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        
        </div>
        <!-- /.content-header -->