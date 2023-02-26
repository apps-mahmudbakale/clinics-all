<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('app.dashboard') }}" class="brand-link navbar-success" style="color:white; font-weight:700;">
        <img src="{{ !empty(app(App\Settings\SystemSettings::class)->logo) ? asset('storage/system/' . app(App\Settings\SystemSettings::class)->logo) : asset('assets/img/logo.png') }}"
            alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ app(App\Settings\SystemSettings::class)->clinic_name ?: 'Clinic'
            }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('app.dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @role('user')
                <li class="nav-item">
                    <a href="{{route('app.appointments.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>Appointments</p>
                    </a>
                </li>
                @endrole
                @can('read-users')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Authentication
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('app.users.index') }}" class="nav-link">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('app.roles.index') }}" class="nav-link">
                                <i class="fa fa-universal-access nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @can('read-settings')
                <li class="nav-item">
                    <a href="{{ route('app.appointments.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>Appointments</p>
                    </a>
                </li>
                @endcan
                @can('read-settings')
                <li class="nav-item">
                    <a href="{{ route('app.settings.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>