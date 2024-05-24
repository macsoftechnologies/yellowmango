<div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?=base_url()?>assets/Admin/admin.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('admin_name');?></span>
                  <!-- <span class="text-secondary text-small">Project Manager</span> -->
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item" <?php if($this->router->fetch_class()== "addashboard") echo 'class="active"';?>>
                  <a class="nav-link" href="<?=base_url();?>addashboard">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "customers") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>customers">
                <span class="menu-title">Customers</span>
                <i class="mdi mdi-account-multiple-plus menu-icon"></i>
              </a>
            </li>

            <!-- <?php if($this->session->userdata('role_id') == 1) { ?>

            <li class="nav-item" <?php if($this->router->fetch_class()== "subadmin") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>subadmin">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>

          <?php } ?> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item" <?php if($this->router->fetch_class()== "products") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>products">
                <span class="menu-title">Products</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "orders") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>orders">
                <span class="menu-title">Orders</span>
                <i class="mdi mdi-arrange-send-to-back menu-icon"></i>
              </a>
            </li>

            <!-- <li class="nav-item" <?php if($this->router->fetch_class()== "dailycities") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>dailycities">
                <span class="menu-title">Daily Cities</span>
                <i class="mdi mdi-map menu-icon"></i>
              </a>
            </li> -->

           <!--  <li class="nav-item" <?php if($this->router->fetch_class()== "weeklycities") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>weeklycities">
                <span class="menu-title">Weekly Cities</span>
                <i class="mdi mdi-map menu-icon"></i>
              </a>
            </li> -->

           <!--  <li class="nav-item" <?php if($this->router->fetch_class()== "vehicles") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>vehicles">
                <span class="menu-title">Motor Hire Purchase System</span>
                <i class="mdi mdi-car menu-icon"></i>
              </a>
            </li> -->

            <li class="nav-item" <?php if($this->router->fetch_class()== "adminpasschange") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>adminpasschange">
                <span class="menu-title">Change Password</span>
                <i class="mdi mdi-key menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "area") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>area">
                <span class="menu-title">Areas</span>
                <i class="mdi mdi-map menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "blogs") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>blogs">
                <span class="menu-title">Blogs</span>
                <i class="mdi mdi-blackberry menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "testimonies") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>testimonies">
                <span class="menu-title">Testimonies</span>
                <i class="mdi mdi-bug menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" <?php if($this->router->fetch_class()== "pincodes") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>pincodes">
                <span class="menu-title">Pincodes</span>
                <i class="mdi mdi-map menu-icon"></i>
              </a>
            </li>

            <?php 
            $userMenu = $this->router->fetch_class()."-".$this->router->fetch_method();
            ?>

            <!--  <li <?php if($userMenu == "listofplaces-index") echo 'class="active"';?>><a href="<?=base_url()?>listofplaces"><i class="fa fa-map"></i> <span>Locations</span></a></li> -->

            <li class="nav-item" <?php if($userMenu == "time-scroll") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>time/scroll">
                <span class="menu-title">Home Scroll</span>
                <i class="mdi mdi-black-mesa menu-icon"></i>
              </a>
            </li>
			
			<li class="nav-item" <?php if($userMenu == "community") echo 'class="active"';?>>
              <a class="nav-link" href="<?=base_url();?>community">
                <span class="menu-title">Community Settings</span>
                <i class="mdi mdi-black-mesa menu-icon"></i>
              </a>
            </li>

            
            
           <!--  <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li> -->
          </ul>
        </nav>

        <div class="main-panel">