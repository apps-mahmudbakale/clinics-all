  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
      </ul>
      <form class="form-inline ml-3"  style="width: 84%">
        <div class="input-group input-group-sm" style="width: 84%">
          <input class="form-control form-control-navbar" type="search" id="form" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="navbar-nav ml-auto">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
              <i class="far fa-user"></i>
              {{auth()->user()->name}}
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
   
              <a href="" class="dropdown-item">
                <i class="fas fa-lock"></i> Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="nav-icon fa fa-power-off"></i> Logout
              </a>
          </div>

      </ul>

      <!-- SEARCH FORM -->

      <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->
<script>
  let form = document.getElementById('form');

  form.addEventListener('click', function () {
    alert('hell');
  })
</script>