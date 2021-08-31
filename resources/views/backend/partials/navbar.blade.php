    <!-- Navbar -->


    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <!-- <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('assets/frontend/logo/download.png')}}" alt="logo" class="brand-image" style="opacity: .8">
            </a> -->

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('dashboard')}}" class="nav-link">Patient</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Management</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Vendor</a>
                    </li>

                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- /.navbar -->
