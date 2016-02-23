      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b> UKT </b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>UKT</b> UDAYANA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav kepala">
              <!-- Messages: style can be found in dropdown.less-->
 
              <!-- Notifications: style can be found in dropdown.less -->

             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('asset/dist/img/avatar5.png')}}" class="user-image" alt="User Image"/>
                  
                  <span class="hidden-xs">ADMIN UKT</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('asset/dist/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                    <p>
                    <!-- Student -->
                      <small>Member since bla</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="https://twitter.com/adhi_poncho" target="_blank">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#"></a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="https://www.facebook.com/adhiponcho" target="_blank">Facebook</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-cogs"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>