<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/vendor/owl-slider.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/vendor/settings.css" />
    <link rel="shortcut icon" href="<?=base_url();?>assets2/images/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?=base_url();?>assets2/js/jquery-3.2.0.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <img src="<?=base_url();?>assets2/images/logo/VEERA_LOGO.png" alt="images">
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" placeholder="Search and hit enter...">
                        <button class="button_search" type="button">Search</button>
                    </div><!-- /input-group -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
        <header id="header" class="header-v1 header-v3">
            <div id="topbar">
                <div class="container container-ver2">
                    <div class="inner-topbar box">
                        <div class="phone-number">
                            <!-- <p class="acc"><img src="assets/images/icon-user-header.png" alt="icon">My Account</p> -->
                            <p class="phone"><span><i class="fa fa-phone"></i></span><span>070-7782-9137</span></p>
                            <p class="phone mail-id"><span><i class="fa fa-envelope"></i></span><span>abc@gmail.com</span></p>
                        </div>
                        <div class="login-details">
                        <!-- Button trigger modal -->
                        <div class="schedule-btnn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Delivery Schedule
                            </button>
                        </div>
                        <?php if($this->session->userdata('customer_id') == '')  {?>
                                <li class="level1"><a href="<?=base_url();?>userlogin" title="Contact us">Login</a></li>
                                
                        <?php } else { ?>
                            <li class="level1"><a href="<?=base_url();?>userlogin/logout" title="Contact us">Logout</a></li>

                            <li class="level1"><a href="<?=base_url();?>home/myaccount" title="Contact us">My Account</a></li>
                        
                        <?php } ?>
                    </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End topbar -->
            <div class="header-top">
                <div class="container container-ver2">
                    <div class="box">
                        <p class="icon-menu-mobile"><i class="fa fa-bars"></i></p>
                        <div class="logo-mobile"><a href="#" title="Xanadu"><img src="<?=base_url();?>assets2/images/logo/VEERA_LOGO.png" alt="Xanadu-Logo"></a></div>
                        <div class="header-nav-section">
                            <div class="logo">
                                <img src="<?=base_url();?>assets2/images/logo/VEERA_LOGO.png">
                            </div>
                            <nav class="mega-menu">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <ul class="nav navbar-nav" id="navbar">
                                    <li class="level1 active dropdown"><a href="<?=base_url();?>home" title="Home">Home</a></li>
                                    <li class="level1"><a href="#" title="About us">About us</a></li>
                                    <li class="level1"><a href="#" title="Store">Shop</a></li>
                                    <li class="level1"><a href="#" title="collections">Gallery</a></li>
                                    <li class="level1"><a href="<?=base_url();?>home/contact" title="Contact us">Contact us</a></li>
                                </ul>
                            </nav>
                            <div class="">
                                <div class="box-right">
                                    <div class="cart hover-menu">
                                        <?php if($this->session->userdata('customer_id') == '') {?>


                                            <?php }else { ?>
                                                 <p class="icon-cart" title="Add to cart">
                                            <i class="icon"></i>
                                            <span class="cart-count"><?php echo $carti;?></span>
                                        </p>
                                            <?php } ?>
                                        
                                        <div class="cart-list list-menu">
                                           <ul class="list">
                                                <?php if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  ?>
                                                <li>
                                                    <a href="#" title="" class="cart-product-image"><img src="<?php echo $cartitems[$i]['product_image'];?>" alt="Product"></a>
                                                    <div class="text">
                                                        <p class="product-name"><?php echo $cartitems[$i]['product_name'];?></p>
                                                        <!-- <p class="product-price"><span class="price-old">$700.00</span><span class="price">$<?php echo $cartitems['price'];?></span></p> -->
                                                        <p class="product-price">$<?php echo $cartitems[$i]['price']*$cartitems[$i]['quantity'];?></p>
                                                        <p class="qty">QTY:<?php echo $cartitems[$i]['quantity'];?></p>
                                                    </div>
                                                    <!-- <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a> -->
                                                    <p class="close">
                                                    <span class="cart_id" name="cart_id" id="<?php echo $cartitems[$i]['cart_id'];?>"><i class="fa fa-times-circle"></i></span>
                                                    </p>
                                                </li>
                                            <?php } 
                                        } ?>
                                            </ul>
                                           
                                             <p class="total"><span class="left">Total:</span> <span class="right">$ <?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                $prices = $tot_price + $prices;
                                                ?>
                                                    <?php }
                                                } ?>
                                    <?php echo $prices;?>
                                                </span></p>
                                       
                                            <div class="bottom">
                                                <a class="link-v1" href="<?=base_url();?>home/viewcart" title="viewcart">View Cart</a>
                                                <a class="link-v1 rt" href="<?=base_url();?>home/checkout" title="checkout">Check out</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End header-top -->
        </header>
          <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="what-icon">

    <div class="schedule-res-btnn">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
        </button>
    </div>

    <div>
        <a href="https://wa.me/+919381912243?text=Hi,%20Feel%20free%20to%20Ask%20" target="_blank">
          <i class="fa fa-whatsapp"></i>&nbsp;
        </a>
    </div>
</div>
        <div class="">
<div class="banner-header banner-lbook3">
                <div class="overlay"></div>
                <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="text">
                    <h3>Login</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
        </div>
        <!-- End banner -->
        <div class="container container-ver2">
            <div class="page-login box space-50 login-ress">
                <div class="row">
                    <div class="col-md-12 sign-in space-30">
                        <div class="login-form">
                            <h3>sign in</h3>
                            <p>Hello, welcome to your account.</p>
                            <!-- <form class="form-horizontal" method="POST"> -->
                              <form class="form-horizontal"action="<?=base_url()?>userlogin/login" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="group box space-20 login-inputs-res">
                                    <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                    <input class="form-control" type="text" placeholder="Your email" id="inputemail" name="email">
                                    <input type="hidden" name="product_id" class="form-control" value="<?php echo $product_id;?>">
                                    <input type="hidden" name="price" class="form-control" value="<?php echo $price;?>">
                                    <input type="hidden" name="quantity" class="form-control" value="<?php echo $quantity;?>">
                                </div>
                                <div class="group box login-inputs-res">
                                    <label class="control-label" for="inputemail">PASSWORD *</label>
                                    <input class="form-control" type="password" placeholder="Password" id="inputpass" name="password">
                                </div>
                                <div class="remember">
                                    <input id="remeber" type="checkbox" name="check" value="remeber">
                                    <label for="remeber" class="label-check">remember me!</label>
                                    <div>
                                        <a class="help" href="<?=base_url();?>home/register" title="help ?">Signup Now</a>
                                        <a class="help" href="#" title="help ?">Fogot your password?&nbsp;|&nbsp;</a>
                                        
                                    </div>
                                </div>
                                <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="footer-v3 align-left">
            <div class="container container-ver2">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">About Us</h3>
                            <p>We assure you that the mangoes are 100% fresh and Carbide Free and Customer will get delicious farm fresh mangoes at his doorstep at an affordable price.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Infomation</h3>
                            <ul class="list-footer">
                                <li><a href="#" title="title">My Account</a></li>
                                <li><a href="#" title="title">Order History</a></li>
                                <li><a href="#" title="title">Terms & Conditions of use</a></li>
                                <li><a href="#" title="title">About Us</a></li>
                                <li><a href="#" title="title">Delivery Schedule</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Get It Touch</h3>
                            <div class="social space-30">
                                <a href="#" title="t"><i class="fa fa-instagram"></i></a>
                                <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                                <a href="#" title="y"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Location</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom box">
                <div class="container container-ver2">
                    <div class="box bottom">
                        <p class="text-center">Copyright &copy;2021 Veera Mango - All Rights Reserved. <br>
                            Developed By <a href="https://macsof.com/" target="_blank">Macsof Technologies</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/engo-plugins.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/slick.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/store.js"></script>
</body>

</html>