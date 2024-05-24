  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
     <style>


        .product-details-content .product-name h1 {
            font-size: 30px;
            margin-bottom: 0px;
            line-height: 30px;
            padding-top: 5px;
        }

        .product-detail-container .product-details-content .prodcuctdetail_image img {
            height: 500px;
            width: 100%;
            padding: 25px;
        }

        .product-details-content .box-details-info {
            margin-bottom: 10px;
        }

        .product-details-content .about-product {
            margin-bottom: 10px;
        }

        .product-details-content p {
            margin-bottom: 0px;
            font-size: 16px
        }

        .box-details-info .wrap-price i {
            margin: 10px 0px;
            color: #ed7d39;
            padding-right: 3px;
        }

        .product-detail-container .detail_pricee {
            margin-top: 15px;
        }

        .product-details-content .options input {
            background: none;
            box-shadow: none;
            border: 1px solid #d9d9d9;
            color: #2b2b2b;
            font-size: 16px;
            font-family: "Poppins";
            height: 35px;
            width: 70px;
            text-align: center;
            padding-left: 0px;
            margin: 0px 10px;
        }

        .product-details-content .options .minus,
        .plus {
            width: 30px;
            height: 30px;
            background: #f2f2f2;
            padding: 0px 5px 5px 5px;
            border: 1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            border-radius: 50%;
            font-size: 20px;
            font-weight: bold;
        }

        .number .icon-minus,
        .icon-plus {
            width: 30px;
            height: 35px;
            border-radius: 4px;
            padding: 8px 5px 8px 5px;
            border: none;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            font-size: 13px;
        }

        .social-icons {
            padding-top: 20px;
            border-top: 1px solid #f5f5f5;
            display: flex;
            align-items: center;
        }

        .social-icons h3 {
            display: inline-block;
            font: 700 14px/20px 'Mulish', sans-serif;
            color: #000;
            text-transform: uppercase;
            vertical-align: 4px;
        }

        .social-icons .aaa {
            margin: 0px 5px;
        }

        .social-icons a {
            padding: 5px 15px 5px 10px;
            border-radius: 26px;
            border: 1px solid #ccc !important;
            display: flex;
            color: #ccc;
            align-items: center;
            justify-content: center;
        }

        .social-icons a i {
            padding: 3px 5px 3px 5px;
            font-size: 20px;
        }

        .product-details-content .social i {
            display: flex;
            font-size: 20px;
            margin: 0px 3px 0px 10px;
        }

        .social-icons .insta a:hover {
            cursor: pointer;
            background: #c43895;
            color: #fff;
            transition: 0.2s ease-in-out;
        }

        .social-icons .fb a:hover {
            cursor: pointer;
            background: #4267B2;
            color: #fff;
            transition: 0.2s ease-in-out;
        }

        .social-icons .whats a:hover {
            cursor: pointer;
            background: green;
            color: #fff;
            transition: 0.2s ease-in-out;
        }

        .product-details-content .detail_pricee .form-check-inline {
            display: flex;
            align-items: center;
        }

        .product-details-content .gift {
            margin: 0px 0px 10px 0px;
        }

        .product-details-content .gift input {
            padding: 0px;
            margin: 0px;
            height: 15px;
            width: 15px;
        }

        .product-details-content .gift input:hover {
            cursor: pointer;
        }

        .product-details-content label:hover {
            cursor: pointer;
        }

        .product-details-content label {
            padding: 0px 0px 0px 8px;
            margin-bottom: 0;
        }

        .product-details-content .action {
            padding: 15px 0px 15px;
        }

        .customer-reviews .user-reviews h4 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .reviewss .card .review-data .star-os i {
            font-size: 14px;
            padding-right: 3px;
            color: #ed7d39;
        }

        .reviewss .card {
            margin: 15px 0px;
            display: flex;
            padding: 10px 10px 15px 10px;
            box-shadow: 0px 0px 2px 0px #ccc;
            border-radius: 5px;
        }

        .reviewss .admin-review {
            margin-right: 20px;
            margin-top: 18px;
            margin-bottom: 18px
        }

        .reviewss .card .user-image {
            text-align: center;
            /*width: 20%;*/
        }

        .reviewss .card .user-image img {
            margin-bottom: 15px;
            border-radius: 50%;
        }

        .reviewss .card .user-image p {
            font-weight: bold;
        }

        .review-data {
            padding-left: 20px;
            padding-top: 12px;
            /*width: 80%;        */
        }

        .review-data p {
            line-height: 22px;
        }

        .reviewss .card {
            /*padding: 10px 0px 0px 15px;*/
        }

        .reviewss .card h4 {
            color: #ccc;
            margin-bottom: 10px;
        }

        .reviewss .card .star-os {
            width: auto;
            padding-bottom: 15px;
        }

        .customer-reviews .user-review-form {
            margin-top: 20px;
        }

        .user-review-form h4 {
            text-transform: uppercase;
            font-weight: bold;
        }

        .user-review-form .form {
            padding: 25px 10px;
        }

        .user-review-form .form .form-group {
            margin: 5px;
        }

        .user-review-form .form .form-group label {
            font-size: 16px;
            font-weight: 400;
            padding-bottom: 8px;
        }

        .user-review-form .form .form-group i {
            /*color: #fff;*/
            /*cursor: pointer;*/
            color: #ed7d39
        }

        .user-review-form .form .form-group i:hover {
            color: #ed7d39;
            cursor: pointer;
        }

        .user-review-form .form-group textarea {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            resize: none;
        }

        .user-review-form .form-group textarea:focus {
            outline: none;
        }

        .user-review-form .input-group {
            position: relative;
            margin: 15px 0px 0px 0px !important;
        }

        .user-review-form .input-group input {
            text-align: left;
            padding-left: 35px;
            font-size: 15px;
            width: 100%;
            border-radius: 5px !important;
        }

        .user-review-form .input-group .review-user {
            position: absolute;
            top: 0;
            z-index: 9999;
            padding: 10px;
        }

        .user-review-form .input-group .review-user i {
            font-size: 18px;
            color: #ccc;
        }

        .user-review-form .form {
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 2px 0px #ccc;

        }

        .user-review-form .review-submit-btn {
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .review-submit-btn button {
            background: #3f8f4b;
            border-radius: 5px;
            height: auto;
            padding: 13px 40px;
            width: auto;
            border: 1px solid #3f8f4b;
            margin: 20px 0px;
            color: #fff;
            font-size: 15px;
            transition: 0.3s ease-in-out
        }

        .review-submit-btn1 button {
            background: grey;
            border-radius: 5px;
            height: auto;
            padding: 13px 40px;
            width: auto;
            border: 1px solid grey;
            margin: 22px 0px;
            color: #fff;
            font-size: 15px;
            transition: 0.3s ease-in-out
        }

        .review-submit-btn button:hover {
            color: #3f8f4b;
            background-color: #fff;
            border: 1px solid #3f8f4b;
        }

        .add-to-cartt button {
            text-transform: uppercase;

        }

        .review-header {
            font-size: 14px;
        }

        @media (max-width: 468px) {

            .add-to-cartt button {
                margin: 15px 0px;
            }

            .quanandadd {
                margin-top: 0px !important;
            }

            .add-to-cartt button {
                padding: 10px 15px;
                margin: 15px 15px 15px 15px;
            }

            .shareee {
                display: none;
            }

            .review-data {
                padding-left: 10px;
                padding-right: 15px;
            }

            .review-data p {
                text-align: justify;
            }

            .product-detail-container .product-details-content .prodcuctdetail_image img {
                height: 400px;
            }

            .mini-container .customer-reviews {
                padding: 0px 10px;
            }

            .res-quantity {
                display: flex;
            }

            .product-details-content .title h3 {
                font-size: 14px !important
            }

            .social-icons h3 {
                font-size: 8px;
                font-weight: bold;
            }

            .social-icons a i {
                padding: 3px 5px 3px 5px;
                font-size: 15px;
            }

            .product-details-content .product-name h1 {
                font-size: 25px;
            }

            .product-details-content .options input {
                width: 50px
            }

            .other-products-heading h3 {
                font-size: 25px;
            }

            .product-details-content .gift input {
                width: 15px;
            }

            .owl-carousel {
                -ms-touch-action: pan-y;
                touch-action: pan-y;
            }

            @media (max-width: 768px) {
                .res-quantity {
                    display: flex;
                }

                .mini-container .customer-reviews {
                    padding: 0px 15px;
                }
            }
        }
     .out { 
        color: red;
      }
      .goto {
        background-color: grey;
      }

      .toto {
        color: white;
      }

      #dollar { 
                display: flex;
                font-size: 30px;
                align-items: center;
             }
             #dollar h3 {
                font-size: 30px;
         }

         *{
    margin: 0;
    padding: 0;
}
/*.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}*/
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ed7d39;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #ed7d39;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #ed7d39;
}

.rate {
    font-size: 20px;
}

.product-price-main {
    font-weight: bold;
    font-size: 20px;
    color: #ed7d39;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>


      <div class="main-content">
            <div class="banner-header banner-lbook3 main-bannerr1">
                <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>Product Details</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
             <form action="<?=base_url()?>home/insertcart/<?php echo $products['product_id'];?>" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
            <div class="container product-detail-container">
                <div class="product-details-content">
                    <div class="col-md-6 col-sm-6">
                        <div class="prodcuctdetail_image">
                            <div>
                                <span class="zoom">
                                    <img class="zoom-images"
                                        src="<?php echo $produc['product_image'];?>"
                                        alt="images">
                                </span>
                            </div>
                            <!-- <div>
                                <span class="zoom">
                                    <img class="zoom-images" src="assets/images/products/20.jpg" alt="images">
                                </span>
                            </div>
                            <div>
                                <span class="zoom">
                                    <img class="zoom-images" src="assets/images/products/20.jpg" alt="images">
                                </span>
                            </div>
                            <div>
                                <span class="zoom">
                                    <img class="zoom-images" src="assets/images/products/20.jpg" alt="images">
                                </span>
                            </div> -->
                        </div>
                        <!-- End slider-for -->
                        <!-- <div class="slider-nav">
                            <div>
                                <img src="assets/images/products/20.jpg" alt="images">
                            </div>
                            <div>
                                <img src="assets/images/products/20.jpg" alt="images">
                            </div>
                            <div>
                                <img src="assets/images/products/20.jpg" alt="images">
                            </div>
                            <div>
                                <img src="assets/images/products/20.jpg" alt="images">
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="box-details-info">
                            <div class="product-name">
                                <h1><?php echo $produc['product_name'];?></h1>
                            </div>
                            <div class="wrap-price">
                                <div>
                                    <span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                    </span>&nbsp;(3 Customer Reviews)
                                </div>
                            </div>
                        </div>
                        <div class="options">
                            <div class="about-product">
                                <p><?php echo $produc['description'];?></p>
                                <!-- <p><span><b>Origin:</b></span>&nbsp;Andhra pradesh, Telangana</p> -->
                            </div>
                            <div class="box space-30 detail_pricee">
                                <div class="row res-quantity">
                                    <div class="col-md-5 col-xs-6">
                                        <div class="title">
                                            <h3>PRICE</h3>
                                        </div>
                                        <h3 class="productppr product-price-main" id="productppr" name="productppr"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $produc['price'];?>&nbsp;<b>/5Kg</b></h3>
                                        <div id="dollar" style="display: none;"><span><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;</span>
                                        <h3 class="productsssss" id="productsssss"></h3>
                                    </div><!-- 
                                            /
                                            <span class="weightperprice"> 1Kg</span> -->
                                        <!-- </h3> -->
                                    </div>
                                    
                                </div>

                                <div class="quanandadd">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6" >
                                            <div class="title">
                                                <h3>QUANTITY</h3>
                                            </div>
                                            <div class="number product-detail-number">
                                                <span class="minus">-</span>
                                                <input type="text" value="1" id="quantity" name="quantity" class="quantity" />
                                                <span class="plus">+</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-6">
                                            <input type="hidden" name="price" class="priced" id="priced" value="<?php echo $produc['price'];?>">
                                             <input type="hidden" name="customer_id" class="form-control" value="<?php echo $this->session->userdata('customer_id');?>">
                                              <input type="hidden" name="product_id" class="form-control" value="<?php echo $products['product_id'];?>">
                                            <!-- <div class="gift">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1" />
                                                    <label class="form-check-label" for="inlineCheckbox1">Add as a Gift Box</label>
                                                </div>
                                            </div> -->
                                            

                                            <div>
                                                <?php if(($products['stock']-$products['outward']) > 0) {?>
                                                    <?php if(count($cartdatasystem) == 0) {?>
                                                     <div class="review-submit-btn add-to-cartt">
                                                    <button type="submit">Add to
                                                        cart</button></span>
                                                    </div>
                                                    <?php } else { ?>
                                                        
                                                    <div class="review-submit-btn1 add-to-cartt">
                                                       <button> <a href="<?=base_url();?>home/viewcart" class="toto">Go to Cart</a></button></span>
                                                    </div>
                                                        
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <a class="btn" style="color: red;"><b>Out Of Stock</b></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                </form>
                                <div class="social-icons box res-icons">
                                    <h3 class="shareee">Share this :</h3>
                                    <div class="insta aaa">
                                        <a href="https://www.instagram.com/yellowmango.in/" target="_blank"><i class="fa fa-instagram"></i>Share</a>
                                    </div>
                                    <div class="fb aaa">
                                        <a href="https://www.facebook.com/yellowmango.in" target="_blank">&nbsp;<i class="fa fa-facebook"></i>&nbsp;Post</a>
                                    </div>
                                    <div class="whats aaa">
                                        <a href="https://wa.me/+919113946041?text=Welcome%20To%20Yellow Mango%20"
                                            target="_blank"><i class="fa fa-whatsapp"></i>Send</a>
                                    </div>
                                </div>
                                <!-- End share -->
                            </div>
                            <!-- End Options -->
                        </div>
                    </div>
                    <!-- End product-details-content -->
                </div>
            </div>
        
                <!-- End container -->
            </div>
            <!-- End MainContent -->
            <div class="container mini-container">
                <div class="col-md-12">
                    <div class="other-products">
                        <div class="other-products-heading">
                            <h3>Our Latest Products</h3>
                        </div>
                    </div>
                    <div class="featured-products home_2 new-arrivals lastest">
                        <div class=" products-container">
                            <div class="products hover-shadow ver2 border-space-product">
                                <div class="our-products">
                                    <div class="">
                                        <div class=" our-productsss owl-carousel owl-one">
                                         <?php 
                                        if(count($cProducts) > 0) {
                                            for ($i=0; $i < count($cProducts); $i++) { 
                                        ?>
                                            <div class="products-main">
                                                <div class="product">
                                                    <div class="product-images">
                                                        <a href="<?=base_url();?>home/product_details/<?php echo $cProducts[$i]['product_id'];?>" title="product-images">
                                                            <img class="primary_image"
                                                                src="<?php echo $cProducts[$i]['product_image'];?>" alt="" />
                                                        </a>
                                                        <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                                            <?php }else { ?>
                                                                <span class="sold-tag  notify-mee">Sold out</span>
                                                            <?php } ?>
                                                        
                                                    </div>
                                                    <div title="Union Bed" class="product-details">
                                                        <div class="">
                                                            <p class="fruit-name"><?php echo $cProducts[$i]['product_name'];?></p>
                                                            <div class="price-rating">
                                                                <div class="price-kg">
                                                                    <p><span><i class="fa fa-inr"></i></span>&nbsp;<?php echo $cProducts[$i]['price'];?> / 5KG</p>
                                                                </div>
                                                                <div class="star-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </div>
                                                             <form action="<?=base_url()?>home/inserthomecart" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                                                                <div class="product-card-btn">
                                                            <?php 
                                                        $carts = $cProducts[$i]['carts'];
                                                        ?>

                                                        <?php if(count($carts) > 0) {
                                                                    for ($k=0; $k < count($carts); $k++) { ?>

                                                        <?php if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) { ?>
                                                            <a class="cmn-btn notify-btn goto" href="<?=base_url();?>home/viewcart">Go to Cart</a>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                        <?php }
                                                    } ?>
                                                    
                                                                <!-- <div class="product-card-btn"> -->
                                                                    <div class="number">
                                                                        <span class="icon-minus"><i
                                                                                class="fa fa-minus"></i></span>
                                                                        <input type="text" value="1" name="quantity" />
                                                                        <span class="icon-plus"><i
                                                                                class="fa fa-plus"></i></span>
                                                                    </div>
                                                                <div>
                                                                    <!-- <a href="product_detail.html"> -->
                                                                         <input type="hidden" value="<?php echo $cProducts[$i]['price'];?>" name="price" />
                                                                <input type="hidden" value="<?php echo $cProducts[$i]['product_id'];?>" name="product_id" />
                                                                <input type="hidden" value="<?php echo $this->session->userdata('customer_id');?>" name="customer_id" />
                                                                <!-- <a href="product_detail.html"> -->
                                                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                                                    <?php if(count($carts) == 0) { ?>
                                                                <button class="cmn-btn notify-btn" type=" button" name="submit"><i
                                                                        class="fa fa-shopping-cart"></i>ADD</button>
                                                                <?php } else { ?>

                                   
                                                                <?php } ?>
                                                                <?php } else { ?>
                                                                     <a href="#" type="button"><button class="cmn-btn notify-btn">Notify me</button></a>
                                                                <!-- <div class="para">
                                                                <p class="out"><b>Out Of Stock</b></p></div> -->
                                                                <?php } ?>
                                                                    <!-- </a> -->
                                                                    <!-- <button class="cmn-btn notify-btn"
                                                                        style="display:none;">Notify me</button> -->
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php }
                                    } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="featured-products home_2 new-arrivals lastest">
                        <div class="container" style="padding: 0px">
                            <div class="products hover-shadow ver2 border-space-product">
                                <div class="our-products">
                                    <div class="">
                                        <div class="our-productsss">
                                            <div class="products-main">
                                                <div class="product">
                                                    <div class="product-images">
                                                        <a href="#" title="product-images">
                                                            <img class="primary_image" src="assets/images/products/20.jpg" alt="" />
                                                            <p class="">Banginapalli <br> 1box - 5kg ( 12,13,14 pcs)</p>
                                                        </a>
                                                    </div>
                                                    <div title="Union Bed" class="product-details">
                                                        <div class="special-offer">
                                                            <div id="ribbon_pos">
                                                                <div class="rectangle">
                                                                    <h2 data-fontsize="18" data-lineheight="27px" class="fusion-responsive-typography-calculated" style="--fontSize:18; line-height: 1.5; --minFontSize:18;">Special Offers</h2>
                                                                </div>
                                                                <div class="triangle-l"></div>
                                                                <div class="triangle-r"></div>
                                                            </div>
                                                            <div class="">
                                                                <div class="pricing">
                                                                    <p>Buy 1 or 2 box - &nbsp;<span class="product-price">$40</span></p>
                                                                    <p>Buy 3 or 4 box - &nbsp;<span class="product-price">$38</span></p>
                                                                    <p>Buy 5 or 6 box - &nbsp;<span class="product-price">$36</span></p>
                                                                </div>
                                                                <a href="product_detail.html">
                                                                    <div class="number">
                                                                        <span class="minus">-</span>
                                                                        <input type="text" value="1" />
                                                                        <span class="plus">+</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <div class="latest-products">
                            <div class="card">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-container">
                    <section class="customer-reviews">
                        <div class="user-reviews re-1">
                            <h4>CUSTOMER REVIEWS</h4>
                        </div>
                        <div class="user-reviews re-1">
                            <h4 class="review-header"><?php echo count($reviews);?> Reviews For Himayath , Mango – 5 Kg</h4>
                        </div>
                        <div class="reviewss">
                            <div class="row">
                                <?php if(count($reviews) > 0){
                                    for ($i=0; $i < count($reviews); $i++) { ?>
                                        <div class="col-md-10">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="user-image">
                                                    <img
                                                        src="<?=base_url();?>assets2/images/user-image.png">
                                                    <p><?php echo $reviews[$i]['name'];?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-10" style="padding: 0px;">
                                                <div class="review-data">
                                                    <div class="userrr-reviewwww">
                                                        <h4><?php echo date('d M Y', strtotime($reviews[$i]['created_at']));?></h4>
                                                        <div class="star-os">
                                                            <?php if($reviews[$i]['review'] == 1) {?>
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <?php }else if($reviews[$i]['review'] == 2){?>
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <?php }else if($reviews[$i]['review'] == 3){?>
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <?php }else if($reviews[$i]['review'] == 4){?>
                                                                <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <?php }else {?>
                                                                <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <?php } ?>
                                                            
                                                        </div>
                                                    </div>
                                                    <p><?php echo $reviews[$i]['comment'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="admin-review">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="user-image">
                                                    <img src="assets/images/Main_Products/Product_images/user-image.png">
                                                    <p>admin</p>
                                                </div>
                                            </div>
                                            <div class="col-md-10" style="padding: 0px;">
                                                <div class="review-data">
                                                    <h4>Apr 5, 2021</h4>
                                                    <div class="star-os">
                                                        <span>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                    </div>
                                                    <p>Mangoes are very sweet and juicy.Mangoes are very sweet and juicy.Mangoes are very sweet and juicy.Mangoes are very sweet and juicy.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>

                                <?php } 
                            } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 cl-xs-12">
                                <div class="user-review-form">
                                    <div class="user-reviews">
                                        <h4>Write a customer review</h4>
                                    </div>
                                    <div class="form">
                                        <form action="<?=base_url()?>home/insertReview/<?php echo $products['product_id'];?>" role="form" id="userForm" name="userForm" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="customer-reviewwwww">
                                                <label class="labeeeel">Your Rating&nbsp;<span>*</span></label>
                                                <!-- <div class="rate">
                                                    
                                                  </div> -->
                                                <!-- <div> -->

                                                    <span class="rate">
                                                       <input type="radio" id="star5" name="rate" value="5" />
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4" />
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3" />
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2" checked />
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1" />
                                                    <label for="star1" title="text">1 star</label>
                                                    </span>
                                                <!-- </div> -->
                                            </div>
                                            <div class="review-inputs">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group input-group">
                                                            <input type="text" name="name" class="Name form-control"
                                                                placeholder="Name..." required>
                                                                <input type="hidden" name="product_id" value="<?php echo $products['product_id'];?>">
                                                            <div class="review-user">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group input-group">
                                                            <input type="text" name="email" class="Name form-control"
                                                                placeholder="Email..." required>
                                                            <div class="review-user">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="10" placeholder="Comment Here..." name="comment" required></textarea>
                                        </div>
                                        <div class="review-submit-btn">
                                            <button type="submit" class="btn form-control">Submit</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <script type="text/javascript">
    $(document).ready(function(){
        $('.quantity').change(function(){
            $('#product_pricee').empty();
             $('#productsssss').empty();
            // var qty = $(this).attr('id');
            // var aa = qty.split("_");
            var price2 = $('#priced').val();
            var quantity = $('#quantity').val();
               var tot_amount = parseFloat(price2) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price2);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
            
        });
      });
    </script>

 