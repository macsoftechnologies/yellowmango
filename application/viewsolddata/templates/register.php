<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS 
    ========================= -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css" rel="stylesheet" />
</head>

<body>
    <!-- <header class="header-area">
        <div class="container-fluid">
            <div class="nav-pad">
                <nav class="navbar navbar-expand-lg  navbar-dark">
                    <div class="logo-area">
                        <a href="index.html"><img src="./assets/images/logo.png"></a>
                    </div>
                    <button class="navbar-toggler btn-style" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <div class="navbar-style col-lg-12 col-md-12 main-menu">
                            <ul class="navbar-nav nav-ul">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Return Policy</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Track Order</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login/SignUp</a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cart</a>
                                </li>
                                <hr>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header> -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png">
        </a>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Return Policy <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Track Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>/userlogin">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>/registration">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
<html>
<section class="content-header">
    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>
</section>

<style type="text/css">
    .alert{
        padding: 2px 8px;
        margin-bottom: 2px;
    }

    .headder {
        margin-top: 50px;
        text-align: center;
    }
    .section {
        margin-left: 250px;
    }

    .button {
        text-align: center;
    }
</style>
<section class="container">
        <div class="row section">
            <div class="col-lg-9">
                <div class="widget atbd_widget widget-card contact-block">
                    <div class="atbd_widget_title">
                        <h4 class="headder"><span class="la la-envelope"></span> Registration Form</h4>
                    </div>
                    <!-- ends: .atbd_widget_title -->
                    <div class="atbdp-widget-listing-contact contact-form">
                        <form id="atbdp-contact-form" class="form-vertical" action="<?=base_url()?>home/insert" role="form" method="post">
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="button">
                            <button type="submit" class="btn btn_theme btn-primary">Registration</button>
                            </div>
                        </form>
                    </div>
                    <!-- ends: .atbdp-widget-listing-contact -->
                </div>
                <!-- ends: .widget -->
            <!-- ends: .col-lg-8 -->
            <!-- ends: .col-lg-4 -->
        </div>
    </div>
</section>
</html>
<!-- ends: .contact-area -->