<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Human Organazation!</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>John Doe</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Office <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("office.index") }}">Offices</a></li>

              </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Employees <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("employee.index") }}">Show All</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Country <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("country.index") }}">Show Country</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> The Reason <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("reason.index") }}">Show Reason</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-clone"></i>Help Type <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("helptype.index") }}">Show Help Type</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-clone"></i>Support <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{ route("support.index") }}">Show Support</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-clone"></i>Service <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{ route("service.index") }}">Show Service</a></li>
                </ul>
              </li>

              <li><a><i class="fa fa-clone"></i>Center <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{ route("center.index") }}">Show Center</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-clone"></i>Rooms <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{ route("room.index") }}">Show Rooms</a></li>
                </ul>
              </li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>Live On</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="e_commerce.html">E-commerce</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="project_detail.html">Project Detail</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="page_403.html">403 Error</a></li>
                <li><a href="page_404.html">404 Error</a></li>
                <li><a href="page_500.html">500 Error</a></li>
                <li><a href="plain_page.html">Plain Page</a></li>
                <li><a href="login.html">Login Page</a></li>
                <li><a href="pricing_tables.html">Pricing Tables</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="#level1_1">Level One</a>
                  <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Level Two</a>
                      </li>
                      <li><a href="#level2_1">Level Two</a>
                      </li>
                      <li><a href="#level2_2">Level Two</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_2">Level One</a>
                  </li>
              </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>
