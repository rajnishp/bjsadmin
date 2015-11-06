<!--MAIN NAVIGATION-->
      <!--===================================================-->
      <nav id="mainnav-container">
        <div id="mainnav">

          <!--Shortcut buttons-->
          <!--================================-->
          <div id="mainnav-shortcut">
            <ul class="list-unstyled">
              <li class="col-xs-4" data-content="Additional Sidebar">
                <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                  <i class="fa fa-magic"></i>
                </a>
              </li>
              <li class="col-xs-4" data-content="Notification">
                <a id="demo-alert" class="shortcut-grid" href="#">
                  <i class="fa fa-bullhorn"></i>
                </a>
              </li>
              <li class="col-xs-4" data-content="Page Alerts">
                <a id="demo-page-alert" class="shortcut-grid" href="#">
                  <i class="fa fa-bell"></i>
                </a>
              </li>
            </ul>
          </div>
          <!--================================-->
          <!--End shortcut buttons-->


          <!--Menu-->
          <!--================================-->
          <div id="mainnav-menu-wrap">
            <div class="nano">
              <div class="nano-content">
                <ul id="mainnav-menu" class="list-group">
            
            
                  

                 
                  <li>
                    <a href="#">
                      <i class="fa fa-th"></i>
                      
                      <span class="menu-title">
                        
                        <strong>Workers</strong>
                        <span class="pull-right badge badge-DANGER"><?= $this -> freeWorkes ?></span>

                      </span>
                      <i class="arrow"></i>
                      <!-- <i class="arrow"></i> -->
                    </a>
            
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="<?= $this -> baseUrl ?>workers/workers"><i class="fa fa-users"></i>List</a></li>
                      <li><a href="<?= $this -> baseUrl ?>workers/addNew"><i class="fa fa-plus"></i>Add</a></li>
                      <!-- <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                      <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                      <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                      <li><a href="layouts-aside-bright-theme.html">Bright aside theme</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                      <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li> -->
                      
                   </ul>
                   </li>

                   <li>
                    <a href="#">
                      <i class="fa fa-th"></i>
                      
                      <span class="menu-title">
                        
                        <strong>Requests</strong>
                        <span class="pull-right badge badge-DANGER"><?= $this -> pendingRequests ?></span>

                      </span>
                      <i class="arrow"></i>
                      <!-- <i class="arrow"></i> -->
                    </a>
            
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="<?= $this -> baseUrl ?>requests/list"><i class="fa fa-shopping-cart"></i>List</a></li>
                      <li><a href="<?= $this -> baseUrl ?>requests/addNew"><i class="fa fa-plus"></i>Add</a></li>
                      <!-- <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                      <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                      <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                      <li><a href="layouts-aside-bright-theme.html">Bright aside theme</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                      <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li> -->
                      
                   </ul>
                   </li>

                   <li>
                    <a href="#">
                      <i class="fa fa-th"></i>
                      
                      <span class="menu-title">
                        
                        <strong>Users</strong>
                        <span class="pull-right badge badge-SUCCESS"><?= $this -> totalUsers ?></span>
                      </span>
                      <i class="arrow"></i>
                      <!-- <i class="arrow"></i> -->
                    </a>
            
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="layouts-collapsed-navigation.html">List</a></li>
                      <li><a href="layouts-offcanvas-navigation.html">Add</a></li>
                      <!-- <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                      <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                      <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                      <li><a href="layouts-aside-bright-theme.html">Bright aside theme</a></li>
                      <li class="list-divider"></li>
                      <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                      <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li> -->
                      
                   </ul>
                   </li>
                     <!--Menu list item-->
                  <li>
                    <a href="<?= $this -> baseUrl ?>getInTouch" >
                      <i class="fa fa-envelope"></i>
                      <span class="menu-title">
                        <strong>List All Queries</strong>
                      </span>
                      <!-- <i class="arrow"></i> -->
                    </a>
                  </li>

            
                  <li class="list-divider"></li>
            
                </ul>


                <!--Widget-->
                <!--================================-->
                <div class="mainnav-widget">

                  <!-- Show the button on collapsed navigation -->
                  <div class="show-small">
                    <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                      <i class="fa fa-desktop"></i>
                    </a>
                  </div>

                  <!-- Hide the content on collapsed navigation -->
                  <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                    <ul class="list-group">
                      <li class="list-header pad-no pad-ver">Server Status</li>
                      <li class="mar-btm">
                        <span class="label label-primary pull-right">15%</span>
                        <p>CPU Usage</p>
                        <div class="progress progress-sm">
                          <div class="progress-bar progress-bar-primary" style="width: 15%;">
                            <span class="sr-only">15%</span>
                          </div>
                        </div>
                      </li>
                      <li class="mar-btm">
                        <span class="label label-purple pull-right">75%</span>
                        <p>Bandwidth</p>
                        <div class="progress progress-sm">
                          <div class="progress-bar progress-bar-purple" style="width: 75%;">
                            <span class="sr-only">75%</span>
                          </div>
                        </div>
                      </li>
                      <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                    </ul>
                  </div>
                </div>
                <!--================================-->
                <!--End widget-->

              </div>
            </div>
          </div>
          <!--================================-->
          <!--End menu-->

        </div>
      </nav>
      <!--===================================================-->
      <!--END MAIN NAVIGATION-->