<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Yellow Mangeo Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/yellowmango.png" />

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>


     <style>

      /*@media (min-width: 360px) and (max-width: 480px) {*/
      /*  .navbar .navbar-brand-wrapper .brand-logo-mini {*/
      /*    padding-left: 80px;*/
      /*  }*/
      /*  .mobile-size{*/
      /*    width: 85px !important;*/
      /*  }*/
      /*  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {*/
      /*  left: 150px;*/
      /*  right: 20px;*/
      /*  top: 70px;*/
      /*  }*/
      /*  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {*/
      /*    width: 40%;*/
      /*  }*/
      /*}*/
          
     </style>



  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
           <a class="brand-logo-mini"><img alt="logo" class="mobile-size" src="<?=base_url();?>assets/yellowmango.png" style="width: 60px; border-radius: 10px;">
           </a>

           <!-- <p>NOM AGENCY</p> -->

          <!--  <a class="brand-logo"><img alt="logo" src="<?=base_url();?>assets/images/logo/logo-name.png" style="width: 100px;"></a> -->
          <!-- <a class="navbar-brand brand-logo" href="<?=base_url();?>admin"><img src="<?=base_url();?>assets1/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?=base_url();?>admin"><img src="<?=base_url();?>assets1/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?=base_url()?>assets/Admin/admin.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $this->session->userdata('admin_name');?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url();?>adminlogin/logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            
            <li class="nav-item nav-profile dropdown d-block d-md-none">
              <a class="nav-link dropdown-toggle" id="profileDropdown12" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <span class="mdi mdi-menu"></span>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown12">
                  <!--<div class="container-fluid page-body-wrapper">-->
                  <!--<nav class="sidebar sidebar-offcanvas" id="sidebar">-->
                  
                  <a class="dropdown-item" href="<?=base_url();?>addashboard">
                  <i class="mdi mdi-home menu-icon mr-2"></i> Dashboard </a>
                  
                  <a class="dropdown-item" href="<?=base_url();?>customers">
                  <i class="mdi mdi-account-multiple-plus menu-icon mr-2"></i> Customers </a>
                  
                  
                  <a class="dropdown-item" href="<?=base_url();?>products">
                  <i class="mdi mdi-chart-bar menu-icon mr-2"></i> Products </a>
                  
                  <a class="dropdown-item" href="<?=base_url();?>orders">
                  <i class="mdi mdi-arrange-send-to-back menu-icon mr-2"></i> Orders </a>
                  
                  <a class="dropdown-item" href="<?=base_url();?>adminpasschange">
                  <i class="mdi mdi-key menu-icon mr-2"></i> Change Password </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>area">
                  <i class="mdi mdi-map menu-icon mr-2"></i> Areas </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>adminpasschange">
                  <i class="mdi mdi-blackberry menu-icon mr-2"></i> Blogs </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>testimonies">
                  <i class="mdi mdi-bug menu-icon mr-2"></i> Testimonies </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>pincodes">
                  <i class="mdi mdi-map menu-icon mr-2"></i> Pincodes </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>time/scroll">
                  <i class="mdi mdi-black-mesa menu-icon mr-2"></i> Home Scroll </a>
                  
                   <a class="dropdown-item" href="<?=base_url();?>community">
                  <i class="mdi mdi-black-mesa menu-icon mr-2"></i> Community Settings </a>
                
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?=base_url();?>assets1/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?=base_url()?>assets/Admin/admin.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?=base_url();?>assets1/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li> -->
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="<?=base_url();?>adminlogin/logout">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <!-- <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li> -->
          </ul>
          <!--<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">-->
          <!--  <span class="mdi mdi-menu"></span>-->
          <!--</button>-->
        </div>
      </nav>
    </div>
  </body>
