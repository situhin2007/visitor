<aside class="main-sidebar sidebar-light-purple elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      {{-- <img src="{{asset('assets/backends/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">BIHS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/backends/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-dsearch">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar text-sm flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' :''}}" href="{{ route('dashboard') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item  {{ request()->is('visitor/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('visitor/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-users text-green"></i>
              <p>
                Visitor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('visitor/index') }}" class="nav-link {{ request()->is('visitor/index') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p> All Visitor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('visitor/create') }}" class="nav-link {{ request()->is('visitor/create') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Create Visitor</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ request()->is('patient/*') ? ' menu-open' :''}}">
            <a href="javascript:void(0)" class="nav-link {{ request()->is('patient/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-table text-danger"></i>
              <p>
                Patients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('patient/index') }}" class="nav-link {{ request()->is('patient/index') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p> All Patient</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('patient/create') }}" class="nav-link {{ request()->is('patient/create') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Create Patient</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ request()->is('doctor/*') ? ' menu-open' :''}}">
            <a href="javascript:void(0)" class="nav-link {{ request()->is('doctor/*') ? 'active' :''}}">
              <i class="nav-icon fa fa-user-md text-green"></i>
              <p>
                Doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('doctor/index') }}" class="nav-link {{ request()->is('doctor/index') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p> All Doctor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('doctor/create') }}" class="nav-link {{ request()->is('doctor/create') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Create Doctor</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-warning"></i>
              <p>
                Vendor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p> All Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Create Vendor</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ request()->is('id_card_generate/*') ? ' menu-open' :''}}">
            <a href="javascript:void(0)" class="nav-link {{ request()->is('id_card_generate/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-table text-danger"></i>
              <p>
                ID Card Generate
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('id_card_generate/index') }}" class="nav-link {{ request()->is('id_card_generate/index') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p> All ID Card</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('id_card_generate/create') }}" class="nav-link {{ request()->is('id_card_generate/create') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Create ID Card</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item">
                <a href="{{url('pre_visitor_registration/index')}}" class="nav-link {{ request()->is('pre_visitor_registration/index') ? 'active' :''}}">
                    <i class="nav-icon fas fa-users text-green"></i>
                    <p>
                        Pre Visitor Request
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('pre_visitor_request_list/index')}}" class="nav-link {{ request()->is('pre_visitor_request_list/index') ? 'active' :''}}">
                    <i class="nav-icon fas fa-users text-blue"></i>
                    <p>
                        New Visitor Request
                    </p>
                </a>
            </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="document.getElementById('admin-logout').submit()">
                <i class="nav-icon fas fa-arrow-circle-right text-danger"></i>
                <p>Logout</p>
            </a>
            <form id="admin-logout" action="{{route('logout')}}" method="post" style="display: none">
                @csrf
            </form>
        </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
