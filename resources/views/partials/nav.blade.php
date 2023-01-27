<nav class="pcoded-navbar" pcoded-header-position="relative">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
      <div class="">
          <div class="main-menu-header">
              <img class="img-40" src="{{asset('images/user.png')}}" alt="User-Profile-Image">
              <div class="user-details">
                  <span>John Doe</span>
                  <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
              </div>
          </div>

          <div class="main-menu-content">
              <ul>
                  <li class="more-details">
                      <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                      <a href="#!"><i class="ti-settings"></i>Settings</a>
                      <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"
          menu-title-theme="theme5">Navigation</div>
      <ul class="pcoded-item pcoded-left-item">
          <li class="">
              <a href="{{route('app.dashboard')}}">
                  <span class="pcoded-micon"><i class="ti-home"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
              </a>              
          </li>
          <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.authentication.main">Authentication</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="{{route('app.users.index')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.authentication.login-bg-image">Users</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('app.roles.index')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext"
                            data-i18n="nav.authentication.login-soc-icon">Roles</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
               
      </ul>
  </div>
</nav>