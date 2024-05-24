<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/vendor/owl-slider.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/vendor/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/vendor/slick.css" />
    <link rel="shortcut icon" href="<?=base_url();?>assets2/images/favicon.png" />
    <script type="text/javascript" src="<?=base_url();?>assets2/js/jquery-3.2.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <title>Yellow Mango</title>
    <style>

        @media (max-width:  468px) {
            .mega-menu {
                z-index: 9999999;
                transform: translateX(-500px);
            }

            .mega-menu-active {
                width: 220px;
                transform: translateX(0px);
            }

            .activeMobileMenu li:nth-child(1) {
                transform: rotate(0deg)!important;
                top: 0px !important;
            }

            .activeMobileMenu li:nth-child(2) {
                transform: rotate( 0deg)!important;
                top: 8px !important;
            }

            .activeMobileMenu li:nth-child(3) {
                transform: rotate(0deg)!important;
                top: 16px !important;
            }
        }

    	.sticky-header {
    		position: fixed;
		    top: 0;
		    width: 100%;
		    z-index: 999999;
		    background: #fff;
    	}

        .product-images {
            position: relative;
            padding: 10px
        }

        .product-images p {
            position: absolute;
            bottom: 15px;
            padding: 0px 5px;
            font-size: 17px;
            color: #0e6b0e;
            font-weight: bold;
        }

        .special-offer {
            padding: 0px;
        }

        .special-offer h5 {
            background: #0e6b0e;
            color: #fff;
            padding: 10px;
            width: 135px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .special-offer p {
            display: flex;
            align-items: center;
            padding-bottom: 5px !important;
            margin-top: 5px;
            padding-left: 5px;
        }

        .special-offer p span {
            font-size: 19px;
            font-weight: bold
        }

        .socila-side-icons {
            position: fixed;
            top: 50%;
            right: 0;
            z-index: 999;
        }

        .what-icon,
        .gog-icon,
        .twit-icon,
        .you-icon {
            background-color: green;
            padding: 10px;
            transform: translateX(77px);
            transition: 0.3s ease;
        }

        .twit-icon {
            background-color: #00acee;
        }

        .you-icon {
            background-color: #FF0000;
        }

        .gog-icon {
            background-color: #db4a39;
        }

        .what-icon:hover,
        .gog-icon:hover,
        .twit-icon:hover,
        .you-icon:hover {
            transform: translateX(0px);
        }

        .marquee p {
            color: #f58634                    
        }

        /*.marr1 {
            display: none;
        }*/

        .what-icon a,
        .gog-icon a,
        .twit-icon a,
        .you-icon a {
            color: #fff;
            display: flex;
            align-items: center;
        }

        .what-icon a i,
        .gog-icon a i,
        .twit-icon a i,
        .you-icon a i {
            margin-right: 10px;
            font-size: 25px;
        }


        .fixed-header {
		    position: fixed;
		    top: 0;
		    z-index: 9999;
		    width: 100%;
		    background: #fff;
		    box-shadow: 0 0 10px 0 #ccc;
		    transition: 0.5s ease;
		}

        .whatsapp-icon-desk {
          position: fixed;
          top: 80%;
          right: 0;
          z-index: 999;
        }

        .whatsapp-icon-desk a i {
          background: green;
          padding: 15px;
          border-radius: 30px;
          color: #fff;
          font-size: 30px;
        }

        .res-social-icons {
            display: none;
        }

        .close-icon {
            display: none;
        }

        .res-action-buttons {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .marr1 {
            width: 500px;
        }

        @media (max-width:  468px) {
            .socila-side-icons {
                display: none;
            }

            .whatsapp-icon-desk {
              position: fixed;
              top: 80%;
              right: 0;
              z-index: 999;
            }

            .close-icon {
                display: block;
            }
        }

        /*@media (max-width: 768px) {
            .activeMobileMenu li:nth-child(1) {
                transform: rotate(0deg)!important;
                top: 10px !important;
            }

             .activeMobileMenu li:nth-child(2) {
                transform: rotate(0deg)!important;
                top: 10px !important;
            }
        }*/



    </style>
</head>

<body>
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <img src="<?=base_url();?>assets2/images/newloader.png" alt="images">
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- End awe-page-loading -->
    <!-- <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"
                        aria-hidden="true"></i></button>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" placeholder="Search and hit enter...">
                        <button class="button_search" type="button">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End pushmenu -->
    <div class="wrappage">
        <header id="header" class="header-v1 header-v3">
            <div class="container">
                
            </div>
            <div id="topbar">
                <div class="container container-ver2">
                    <div class="inner-topbar box">
                        <div class="phone-number">
                            <!-- <p class="acc"><img src="assets/images/icon-user-header.png" alt="icon">My Account</p> -->
                            <!--<a href="tel:9848421988"><p class="phone"><span><i class="fa fa-phone"></i></span><span>+91 9848421988</span></p></a>-->
                            <p class="phone"><span><i
                                        class="fa fa-envelope"></i></span><span>mail2yellowmango@gmail.com</span></p>
                        </div>

                        <div class="marr1">
                            <div class="marqueee">
                                <marquee><p><b><?php echo $scroll['scroll_name'];?></b></p></marquee>
                            </div>
                        </div>


                        <div class="login-details">
                            <li class="serving-btn-container">
                                <p class="serving-btn cmn-btn" data-toggle="modal" data-target="#myModal">
                                    <span>Currently
                                        we are serving here</span>
                            </li>
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End topbar -->
            <div class="header-top" id="header-top">
                <div class="container container-ver2">
                    <div class="box responsive-mobile-menu">
                        <ul class="mobile-icon">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="logo-mobile"><a href="<?=base_url()?>home/index" title="Xanadu"><img
                                    src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Logo/yellowmango.png"
                                    alt="Xanadu-Logo"></a></div>
                        <div class="header-nav-section">
                            <div class="logo">
                                <a href="<?=base_url()?>home/index" title="Xanadu">
                                    <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Logo/yellowmango.png">
                                </a>
                            </div>
                            <nav class=" mega-menu">
                                    
                                <!-- Brand and toggle get grouped for better mobile display -->

                                <div class="close-icon">
                                    <i class="fa fa-times close"></i>
                                </div>

                                <ul class="nav navbar-nav" id="navbar">
                                    <li class="level1  dropdown"><a href="<?=base_url();?>home" title="Home">Home</a>
                                    </li>
                                    <!-- active-menu -->
                                    <li class="level1"><a href="<?=base_url();?>home/shop">Shop</a></li>
                                    <li class="level1"><a href="<?=base_url();?>home/bulkorder">Bulk Order</a></li>
                                    <li class="level1"><a href="<?=base_url();?>home/blog" title="Store">Blog</a></li>
                                    <li class="level1"><a href="<?=base_url();?>home/about">About us</a></li>
                                    <li class="level1"><a href="<?=base_url()?>home/contact" title="Contact us">Contact Us</a></li>
                                    <li class="level1"><a href="<?=base_url()?>home/privicypolicy" title="Privacy Policy">Privacy Policy</a></li>
                                </ul>

                                <div class="res-social-icons">
                                    <div class="ress">
                                        <!-- <li class="what-icon"><a href="https://wa.me/+919113946041?text=Welcome%20To%20Yellow Mango%20" target="_blank"><i class="fa fa-whatsapp"></i>Whatsapp</a></li> -->
                                        <p class="twit-res-icon"><a href="https://www.facebook.com/yellowmango.in" target="_blank">&nbsp;<i class="fa fa-facebook"></i>&nbsp;</a></p>                                        
                                        <p class="gog-res-icon"><a href="https://www.instagram.com/yellowmango.in/" target="_blank"><i class="fa fa-instagram"></i></a></p>
                                        <p class="you-res-icon"><a href="https://www.youtube.com/watch?v=-lbIIQUOHH4&t=9s" target="_blank"><i class="fa fa-youtube-play"></i></a></p>
                                    </div>                                    
                                </div>


                            </nav>
                            <div class="cart hover-menu">
                                        <p class="icon-cart icon-user" title="user">
                                            <i class="fa fa-user"></i>
                                        </p>
                                        <div class="cart-list list-menu">
                                            <ul class="list">
                                                <?php if($this->session->userdata('customer_id') == ''){?>
                                                <li class="level1"><a href="<?=base_url();?>userlogin/index/0/0/0" title="Contact us">Login</a></li>
                                                 <li class="level1"><a href="<?=base_url();?>home/register" title="Contact us">Sign Up</a></li>
                                                <?php } else { ?>

                                                <li class="level1"><a href="<?=base_url();?>home/myaccount" title="Contact us">My Account</a></li>
                                                <li class="level1"><a href="<?=base_url();?>userlogin/logout" title="Contact us">Logout</a></li>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                            <div class="datest">
                                <div class="box-right">
                                    <!-- <div class="cart hover-menu">
                                        <p class="icon-cart icon-user" title="user">
                                            <i class="fa fa-user"></i>
                                        </p>
                                        <div class="cart-list list-menu">
                                            <ul class="list">
                                                <?php if($this->session->userdata('customer_id') == ''){?>
                                                <li class="level1"><a href="<?=base_url();?>userlogin/index/0/0/0" title="Contact us">Login</a></li>
                                                 <li class="level1"><a href="<?=base_url();?>home/register" title="Contact us">Sign Up</a></li>
                                                <?php } else { ?>

                                                <li class="level1"><a href="<?=base_url();?>home/myaccount" title="Contact us">My Account</a></li>
                                                <li class="level1"><a href="<?=base_url();?>userlogin/logout" title="Contact us">Logout</a></li>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <?php if($this->session->userdata('customer_id') == ''){?>
                                    <?php } else { ?>
                                    <div class="cart hover-menu">
                                        <p class="icon-cart" title="Add to cart">
                                            <i class="icon"></i>
                                            <span class="cart-count"><?php echo count($cartitems);?></span>
                                        </p>
                                        <div class="cart-list list-menu">
                                            <ul class="list">
                                                 <?php if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  ?>
                                                <li>
                                                    <a href="#" title="" class="cart-product-image"><img
                                                            src="<?php echo $cartitems[$i]['product_image'];?>" alt="Product"></a>
                                                    <div class="text">
                                                        <p class="product-name"><?php echo $cartitems[$i]['product_name'];?></p>
                                                        <p class="product-price"><span
                                                                class="price">₹<?php echo $cartitems[$i]['price'] * $cartitems[$i]['quantity'];?></span></p>
                                                        <p class="qty">QTY:<?php echo $cartitems[$i]['quantity'];?></p>
                                                    </div>
                                                   <!--  <a class="close" href="#" title="close"><i
                                                            class="fa fa-times-circle"></i></a> -->
                                                            <p class="close">
                                                    <span class="cart_id" name="cart_id" id="<?php echo $cartitems[$i]['cart_id'];?>"><i class="fa fa-times-circle"></i></span>
                                                    </p>
                                                </li>
                                            <?php } 
                                             } ?>
                                               
                                            </ul>
                                            <p class="total"><span class="left">Total:</span> <span
                                                    class="right">₹<?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                $prices = $tot_price + $prices;
                                                ?>
                                                    <?php }
                                                } ?>
                                    <?php echo $prices;?></span></p>
                                    <?php if(count($cartitems) == 0) {?>
                                        <?php } else { ?>
                                            <div class="bottom res-action-buttons">
                                                <a class="link-v1" href="<?=base_url();?>home/viewcart" title="viewcart">View Cart</a>
                                                <a class="link-v1 rt" href="<?=base_url();?>home/checkout" title="checkout">Check out</a>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                    <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testk">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End header-top -->
            <div class="socila-side-icons">
                <ul>
                    <!-- <li class="what-icon"><a href="https://wa.me/+919113946041?text=Welcome%20To%20Yellow Mango%20" target="_blank"><i class="fa fa-whatsapp"></i>Whatsapp</a></li> -->
                    <li class="twit-icon"><a href="https://www.facebook.com/yellowmango.in" target="_blank">&nbsp;<i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
                    <li class="you-icon"><a href="https://www.youtube.com/watch?v=-lbIIQUOHH4&t=9s" target="_blank"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                    <li class="gog-icon"><a href="https://www.instagram.com/yellowmango.in/" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                </ul>
            </div>

            <div class="whatsapp-icon-desk">
                <li class="what-icon-new"><a href="https://wa.me/+919113946041?text=Welcome%20To%20Yellow Mango%20" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            </div>

        </header><!-- /header -->

        <script type="text/javascript">
    var baseurl = "<?php echo base_url();?>";
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script type="text/javascript">
    $(document).ready(function(){
        $('body').on('click', '.cart_id', function(){
            $('.testk').empty();
            $('.carttest').empty();
          var id = $(this).attr('id');
          var url = baseurl+'home/deleteCart';
          // location.reload();
          $.ajax({
              url: url,
              type: 'POST',
              dataType: 'json',
              data:{cart_id:id},
              success: function (res) {
                  if(res['status'] == "pass")
                  {
                    $('.datest').hide();
                    $('.testcart').hide();
                    $('.carttest').show();
                    // $("#branch").show();
                    // getStatesList();
                    // // window.location = window.location

                  // location.reload();
                  }
                  else
                  {
                     alert("somethig went wrong");
                     // window.location = window.location

                  // location.reload();
                  }
              }
          });
      })

        $('body').on('click', '.cart_id', function(){
          $('.testk').empty();
         var itemId = $(this).attr('id');
          var msg = '';
          var url = baseurl+'home/getTotalStstessList';
          $.ajax({
            url: url,
            type: 'POST',
            data: {customer_id: itemId},
           //  beforeSend: function() {
           //    $("#loading-image").show();
           //  // $('.testk').empty()
           // },
            // dataType: 'json',
            success: function(res){
              $('.testk').empty();
              $('.datest').hide();
              $('.carttest').show();
              $('.testcart').hide();
              $('.what-icon').hide();
              $('.testk').append(res);
            }
        });
        });
    });
</script>

<script>
    function menuu() {
      document.querySelector('.mega-menu').classList.toggle("nav-menu1");
      // document.querySelector(".close-icon").classList.toggle("close-icon-total");
    }
  </script>

<script>
    window.onscroll = function() {myFunction()};
    var headerTop = document.getElementById("header-top");
    function myFunction() {
        if(window.innerWidth > 1200) {
            if (window.scrollY > 100) {
    headerTop.classList.add("fixed-header");
  } else {
    headerTop.classList.remove("fixed-header");
  }
        }
  
}
</script>