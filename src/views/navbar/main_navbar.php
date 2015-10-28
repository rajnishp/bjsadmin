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
            
                  <!--Category name-->
                  <li class="list-header">Navigation</li>
            
                  <!--Menu list item-->
                  <li>
                    <a href="<?= $this -> baseUrl ?>workers/workers" >
                      <i class="fa fa-users"></i>
                      <span class="menu-title">
                        <strong>List All Workers</strong>
                        <!-- <span class="label label-success pull-right">Top</span> -->
                      </span>
                    </a>

                  </li>
            
                  <!--Menu list item-->
                  <li>
                    <a href="<?= $this -> baseUrl ?>requests" >
                      <i class="fa fa-shopping-cart"></i>
                      <span class="menu-title">
                        <strong>List All Requests</strong>
                      </span>
                      <!-- <i class="arrow"></i> -->
                    </a>
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


                  <!--Menu list item-->
                  <li>
                    <a href="<?= $this -> baseUrl ?>workers/addNew" >
                      <i class="fa fa-plus"></i>
                      <span class="menu-title">
                        <strong>Add New Worker</strong>
                        <!-- <span class="pull-right badge badge-warning">9</span> -->
                      </span>
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