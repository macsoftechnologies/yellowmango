 <style type="text/css">
     .out { 
        color: red;
      }
      .goto {
        background-color: grey;
      }

    .home-blog-section {
        margin: 30px 0px;
    }

    .owl-carousel {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
    }

    .testimonial-block {
            background-image: url(<?=base_url();?>assets2/images/banner-catlog1.jpg) !important;
            
    }

    .testimonial-block .test-overlay {
        background-color: #00000052;
        padding: 25px 0px;
    }

    .customer-review .para {
        text-align: justify;
    }


 </style>
  <?php if($this->session->flashdata('success_msg')){ 
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
 <div class="tp-banner-container hidden-dot ver1">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Banners/1.banner.png"
                            alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top"
                            data-bgrepeat="no-repeat">
                        <a href="<?=base_url()?>home/shop">
                            <button class="shop-now-btn cmn-btn">
                             Shop now
                            </button>
                        </a>
                    </li>
                    <!-- SLIDER -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Banners/2.banner.png"
                            alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top"
                            data-bgrepeat="no-repeat">
                        <a href="<?=base_url()?>home/shop">
                            <button class="shop-now-btn cmn-btn">
                             Shop now
                            </button>
                        </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Banners/3.banner.png"
                            alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top"
                            data-bgrepeat="no-repeat">
                        <a href="<?=base_url()?>home/shop">
                            <button class="shop-now-btn cmn-btn">
                             Shop now
                            </button>
                        </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Banners/4.banner.png"
                            alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top"
                            data-bgrepeat="no-repeat">
                        <a href="<?=base_url()?>home/shop">
                            <button class="shop-now-btn cmn-btn">
                             Shop now
                            </button>
                        </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url();?>assets2/images/yellowmango_from_scratch/Banners/5.banner.png"
                            alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top"
                            data-bgrepeat="no-repeat">
                        <a href="<?=base_url()?>home/shop">
                            <button class="shop-now-btn cmn-btn">
                             Shop now
                            </button>
                        </a>
                    </li>
                    <!-- SLIDER -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>

         <div class="choose-us">
            <div class="container container-ver2">
                <div class="title-choose align-center">
                    <h3>Why Choose Us</h3>
                </div>
                <!--End title-->
                <div class="col-md-4 choose-col">
                    <div class="choose-us-image">
                        <img class="icon-choose" src="<?=base_url();?>assets2/images/yellowmango_from_scratch/resume's/refined.png"
                            alt="icon-choose">
                    </div>
                    <div class="text">
                        <h4>100% Carbide Free
                            and Natural Ripen</h4>
                        <p>Get Carbide and Chemical Free Farm Fresh Naturally Ripen
                            Mangoes </p>
                    </div>
                </div>
                <!--End col-md-3-->
                <div class="col-md-4 choose-col">
                    <div class="choose-us-image">
                        <img class="icon-choose" src="<?=base_url();?>assets2/images/yellowmango_from_scratch/resume's/cart.png"
                            alt="icon-choose">
                    </div>
                    <div class="text">
                        <h4>100% Organic</h4>
                        <p>Our Products are available at reduced prices at reduced prices compared to those at usual
                            natural markets </p>
                    </div>
                </div>
                <!--End col-md-6-->
                <div class="col-md-4 choose-col">
                    <div class="choose-us-image">
                        <img class="icon-choose" src="<?=base_url();?>assets2/images/yellowmango_from_scratch/resume's/door.png"
                            alt="icon-choose">
                    </div>
                    <div class="text">
                        <h4>Door Step Delivery
                        </h4>
                        <p>We offer door step delivery
                            With in three days at Customers Convenient Time.</p>
                    </div>
                </div>
                <!--End col-md-3-->
            </div>
            <!--End container-->
        </div>
        <!-- End container -->
        <!-- End Shiping version2  -->
        <div class="our-products-section">
            <div class="container">
                <div class="title-text-v2">
                    <h3>Our Products</h3>
                </div>
                <div class="featured-products home_2 new-arrivals lastest">
                    <div class="container products-container">
                        <div class="products hover-shadow ver2 border-space-product">
                            <div class="our-products">
                                <div class="container container-ver2">
                                    <div class=" our-productsss owl-carousel owl-one">
                                        <?php 
                                        if(count($cProducts) > 0) {
                                            for ($i=0; $i < count($cProducts); $i++) { 
                                        ?>
                                        <div class="products-main">
                                            <div class="product">
                                                <div class="product-images">
                                                    <a href="<?=base_url();?>home/product_details/<?php echo $cProducts[$i]['product_id'];?>" title="product-images">
                                                        <img class="primary_image" src="<?php echo $cProducts[$i]['product_image'];?>"
                                                            alt="" />
                                                    </a>
                                                    <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                                        <?php } else { ?>
                                                    <span class="sold-tag notify-mee">Sold out</span>
                                                <?php } ?>
                                                </div>
                                                <div title="Union Bed" class="product-details">
                                                    <div class="">
                                                        <p class="fruit-name"><?php echo $cProducts[$i]['product_name'];?></p>
                                                        <div class="price-rating">
                                                            <div class="price-kg">
                                                                <p>₹<?php echo $cProducts[$i]['price'];?>&nbsp;&nbsp;/5KG</p>
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
                                                            <!-- <a href="product_detail.html"> -->

                                                        <?php 
                                                        $carts = $cProducts[$i]['carts'];
                                                        ?>

                                                        <?php if(count($carts) > 0) {
                                                                    for ($k=0; $k < count($carts); $k++) { ?>

                                                        <?php if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) { ?>
                                                            <div class="para1">
                                                            <a class="cmn-btn notify-btn goto" href="<?=base_url();?>home/viewcart">Go to Cart</a></div>
                                                        <?php } else { ?>
                                                            <div class="number">
                                                                    <span class="minus"><i
                                                                            class="fa fa-minus"></i></span>
                                                                    <input type="text" value="1" name="quantity" />
                                                                    <span class="plus"><i class="fa fa-plus"></i></span>
                                                                </div>
                                                            <div>

                                                                
                                                            <?php } ?>
                                                        <?php }
                                                    } ?>
                                                            <!-- </a> -->

                                                            <div class="number">
                                                                    <span class="minus"><i
                                                                            class="fa fa-minus"></i></span>
                                                                    <input type="text" value="1" name="quantity" />
                                                                    <span class="plus"><i class="fa fa-plus"></i></span>
                                                                </div>
                                                            <div>

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
                                                                <!-- <div class="para"> -->
                                                                    <a href="#" type="button"class="cmn-btn notify-btn">Notify me</a>
                                                                    <!-- <button class="cmn-btn notify-btn">Notify me</button></a> -->

                                                                <!-- <p class="out"><b>Out Of Stock</b></p></div> -->
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
                </div>
            </div>
        </div>
        <!-- End container-ver2 -->
        <!-- <div class="special home_v1 bg-images box space-100"
        style="background-image:url('assets/images/home1-banner1.jpg');background-repeat: no-repeat;">
        <div class="col-md-5 float-left align-right middle-banner">
            <img class="images-logo" src="assets/images/products/11.webp" alt="images">
        </div> -->
        <!-- End col-md-7 -->
        <!-- <div class="col-md-7 float-right align-left">
            <div class="special-content">
                <img class="icon-big" src="assets/images/icon-shipping-5.png" alt="Big sale today">
                <h3>BIG SALE TODAY</h3>
                <h5>Get 30% off your order of $100 or more...</h5>
                <div class="time" data-countdown="countdown" data-date="04-20-2017-10-20-30"></div>
                <a class="link-v1 bg-brand font-300" href="#" title="shopnow">Shop Now</a>
            </div>
        </div> -->
        <!-- End col-md-5 -->
        <!-- </div> -->
        <!-- Testimonials -->
        <!-- End container-ver2 -->

        <section>
            <div class="offer-banner">
                <img src="<?=base_url();?>assets2/images/offer_banner1.jpg">
            </div>
        </section>
        

        <div class="our-products-section home-blog-section">
            <div class="container">
                <div class="title-text-v2">
                    <h3>Blog</h3>
                </div>
                <div class="featured-products home_2 new-arrivals lastest">
                    <div class="container products-container">
                        <div class="products hover-shadow ver2 border-space-product">
                            <div class="our-products">
                                <div class="container container-ver2">
                                    <div class=" our-productsss owl-carousel owl-three">
                                        <?php if($blogs->num_rows() > 0) {
                                            foreach ($blogs->result() as $key => $bb) { ?>
                                                <div class="home-blog-sectionn">
                                                    <div class="home-blog-section-main">
                                                    	<div class="row">
                                                        	<div class="col-md-6">
                                                        		<div class="blog-image home-blog-imagee">
                                                        			<a href="#" title="product-images">
        		                                                        <img class="primary_image" src="<?php echo $bb->blog_image;?>"
        		                                                            alt="" />
        		                                                    </a>
                                                        		</div>
                                                        	</div>

                                                        	<div class="col-md-6">
                                                        		<div class="blog-detailss">
                                                        			 <h5><?php echo date('d/m/Y', strtotime($bb->created_at));?> / Posted By <br>
                                                        			 	Yellowmango
                                                        			 </h5>

                                                        			 <h3><?php echo $bb->blog_name;?></h3>

                                                        			 <p><?php echo $bb->description;?></p>
                                                        		</div>
                                                        	</div>
                                                        </div>
                                                    </div>
                                                    <!-- <span class="sold-tag">Sold out</span> -->
                                                </div>
                                            <?php }
                                        } ?>

                                        <!-- <div class="home-blog-sectionn">
                                            <div class="home-blog-section-main">
                                            	<div class="row">
                                                	<div class="col-md-6">
                                                		<div class="blog-image home-blog-imagee">
                                                			<a href="#" title="product-images">
		                                                        <img class="primary_image" src="http://macsof.in/yellowmango/assets/profiles/1619704344.jpg"
		                                                            alt="" />
		                                                    </a>
                                                		</div>
                                                	</div>

                                                	<div class="col-md-6">
                                                		<div class="blog-detailss">
                                                			 <h5>02/05/2021 / Posted By <br>
                                                			 	Yellowmango
                                                			 </h5>

                                                			 <h3>BENIFITS OF MANGO</h3>

                                                			 <p>benifits of mangoo benifits of mangoo benifits of mangoo benifits of mangoobenifits of mangoobenifits of mangoobenifits of mangoo</p>
                                                		</div>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="home-blog-sectionn">
                                            <div class="home-blog-section-main">
                                            	<div class="row">
                                                	<div class="col-md-6">
                                                		<div class="blog-image home-blog-imagee">
                                                			<a href="#" title="product-images">
		                                                        <img class="primary_image" src="http://macsof.in/yellowmango/assets/profiles/1619704344.jpg"
		                                                            alt="" />
		                                                    </a>
                                                		</div>
                                                	</div>

                                                	<div class="col-md-6">
                                                		<div class="blog-detailss">
                                                			 <h5>02/05/2021 / Posted By <br>
                                                			 	Yellowmango
                                                			 </h5>

                                                			 <h3>BENIFITS OF MANGO</h3>

                                                			 <p>benifits of mangoo benifits of mangoo benifits of mangoo benifits of mangoobenifits of mangoobenifits of mangoobenifits of mangoo</p>
                                                		</div>
                                                	</div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-block home_v1 bg-images box">
            <div class="test-overlay">
                <div class="container container-ver2">
                    <div class="testiomonials-container">
                        <div class="title-choose align-center">
                            <h3>Our Testimonial</h3>
                            <p>We Are Online Market Of Organic Food</p>
                            <!--End border-->
                        </div>
                        <div class="customer-review-container owl-carousel owl-two">
                            <?php if($testimonies->num_rows() > 0) {
                            foreach ($testimonies->result() as $key => $test) { ?>
                                    <div class="customer-review ">
                                        <p><?php echo $test->testimonies;?></p>
                                        <div class="author-name">
                                            <p> <?php echo $test->testimony_name;?>, <?php echo $test->testimony_address;?></p>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <!-- End col-md-5 -->
                </div>
            </div>
        </div>


        <!-- <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div> -->
      