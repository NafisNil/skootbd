


  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout </p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logo.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('team.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Member</p>
                </a>
              </li>
            </ul>
          </li>

    



          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="{{route('message.index')}}" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Welcome Message</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Contact</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('credential.index')}}" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Credential</p>
            </a>
          </li>

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{route('term.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Terms and Condition</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('rule.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">How to use</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('gallery.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Gallery</p>
            </a>
          </li>

        </ul>
      </nav>
    
    
    
    <!-- /.sidebar-menu -->
  </div>