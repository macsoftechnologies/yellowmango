<style>
/* cart-section style */

.main-content {
    margin: 25px 0px;
}

.cart-inner {
    border: 1px solid #ebebeb;
    height: auto;
    padding: 12px 5px;
    background-color: #fff;
    box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
    border-color: rgba(223,225,229,0);
    margin: 15px 0px;
}

.cart-img {
    text-align: center;
}

.cart-details h3 {
    padding-bottom: 10px;
}

.cart-details p {
    padding-bottom: 8px;
}

.price-details {
    font-size: 20px;
    color: #000;
    display: block;
    padding-bottom: 5px;
}

.rating-icon ul {
    color: #ed7d39;
    font-size: 17px;
    display: flex;
    list-style-type: none;
    margin-bottom: 10px;
}

.rating-icon ul li {
    padding: 0px 2px;
}

.btn-details {
    margin-top: 30px;
}

.cart-inner1 {
    border: 1px solid #ebebeb;
    height: auto;
    padding: 12px 5px;
    margin-top: 35px;
    border-color: rgba(128, 128, 128, .15);
    box-shadow: 0 1px 10px 5px rgb(128 128 128 / 15%);
}

.cart-inner2 {
    border: 1px solid #ebebeb;
    height: auto;
    padding: 12px 5px;
    margin-top: 35px;
    border-color: rgba(128, 128, 128, .15);
    box-shadow: 0 1px 10px 5px rgb(128 128 128 / 15%);
}

.price-data {
    display: block;
}

.price-data1 {
    display: none;
}

.btn-details {
    display: block;
}

.btn-details1 {
    display: none;
}


.inc-dec-inputs {
    display: flex;
    align-items: center;
}

.inc-dec-inputs .product-detail-number {
    margin-left: 20px;
}

.inc-dec-inputs .product-detail-number input {
    border: 1px solid #ddd;
    margin: 0 10px;
}

.product-images {
    overflow: hidden;
}

.products-main {
    margin: 10px 0px 15px 0px !important;
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

.product-detail-number-input .minus,
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
    font-size: 17px;
    font-weight: bold;
}

@media (max-width: 1024px) {

    /* .logo-mobile img {
        height: 100px;
    } */

    .cart-inner {
        text-align: center;
    }

    .cart-inner1 {
        text-align: center;
    }

    .cart-inner2 {
        text-align: center;
    }


    .cart-details {
        padding-right: 0px;
        margin-top: 10px;
    }

    .price-details {
        padding-bottom: 0px;
        font-size: 17px;
    }

    .rating-icon ul {
        display: flex;
        justify-content: center;
        font-size: 14px;
    }

    .price-data1 {
        display: block;
        padding-left: 8px;
    }

    .price-data {
        display: none;
    }

    .btn-details1 {
        display: block;
        margin-top: 10px;
    }

    .btn-details {
        display: none;
    }
}

.tab-content {
    height: 100%;
}

.tab-content .product {
    display: block;
}

.our-productsss .products-main {
    border: 1px solid #ccc;
    border-radius: 5px;
}


@media (max-width: 766px) {

    .cart-details {
        padding-right: 0px;
    }

    .cart-details p {
        text-align: justify;

    }

    .price-details {
        padding-top: 5px;
        font-size: 15px;
        padding-bottom: 0px;
    }

    .rating-icon ul {
        display: flex;
        justify-content: center;
        font-size: 14px;
    }

    .price-data1 {
        display: block;
    }

    .price-data {
        display: none;
    }

    .btn-details1 {
        display: block;
        margin-top: 10px;
    }

    .btn-details {
        display: none;
    }
}

@media (max-width: 468px) {

    .res-det {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
    }

    .rating-res {
        display: none;
    }

    .row-align {
        display: block !important
    }

    .cart-inner1 {
        margin-top: 30px;
    }

    .cart-inner2 {
        margin-top: 30px;
    }

    .cart-img {
        padding-left: 8px;
    }

    .cart-img img {
        width: 100px !important;
        height: 100px !important
    }

    .cart-details {
        padding-right: 0px;
    }

    .cart-details h3 {

        font-size: 14px;
    }

    .cart-details p {
        font-size: 13px;
        text-align: justify;

    }

    .price-details {
        font-size: 15px;
        padding-bottom: 0px;
    }

    .rating-icon ul {
        display: flex;
        justify-content: center;
        font-size: 14px;
    }

    .price-data1 {
        display: block;
        padding-left: 12px;
        padding-top: 6px;

    }

    .price-data {
        display: none;
    }

    .btn-details1 {
        display: block;
        margin-top: 5px;
    }

    .btn-details {
        display: none;
    }
}

.our-productsss {
    display: block;
}

.plusss {
    border: none !important;
    background: none !important;
    padding: 5px 0px !important;
}

.product-images img {
    height: 250px;
    width: 100%;
}

.list-item-products img{
    height: 150px;
    width: 150px;
}

.list-item-products h3 {
    /*text-align: left;*/
    color: #458920;
    font-size: 18px !important;
}

.list-item-products p {
    font-size: 15px;
    color: #458920;
}

.inc-dec-inputs {
    font-family: 'Open Sans', sans-serif, sans-serif !important;
}

.inc-dec-inputs .numm{
    margin-left: 15px;
}

.row-align {
    display: flex;
    align-items: center;
}

</style>


<div class="banner-header banner-lbook3 main-bannerr">
    <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
    <div class="overlayy-main"></div>
    <div class="text">
        <h3>SHOP</h3>
        <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
    </div>
</div>

<?php if($this->session->flashdata('success_msg')){ 
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>

<div class="main-content">
    <div class="container container-ver2">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home">Grid View</a></li>
            <li><a data-toggle="pill" href="#menu1">List View</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="container container-ver2">
                    <div class=" our-productsss">
                        <div class="col-md-12" style="padding: 0px">
                            <div class="row">

                                <?php 
                                if(count($cProducts) > 0) {
                                    for ($i=0; $i < count($cProducts); $i++) { 
                                ?>

                                <div class="col-md-3">
                                    <div class="products-main">
                                        <div class="product">
                                            <div class="product-images">
                                                <a href="<?=base_url();?>home/product_details/<?php echo $cProducts[$i]['product_id'];?>" title="product-images">
                                                    <img class="primary_image" src="<?php echo $cProducts[$i]['product_image'];?>"
                                                        alt="" />
                                                </a>
                                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                                        <?php } else { ?>
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
                                                    <form action="<?=base_url()?>home/insertshopcart" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
													<input type="hidden" value="<?php echo $cProducts[$i]['product_id'];?>" name="product_id" />
													
                                                    <div class="product-card-btn">
                                                        
                                                        <div class="product-card-btn shop-main-cart">
                                                            <!-- <a href="product_detail.html"> -->

                                                        <?php 
                                                        $carts = $cProducts[$i]['carts'];
														
                                                        ?>

                                                        <?php if(count($carts) > 0) {
                                                                    for ($k=0; $k < count($carts); $k++) { ?>

                                                        <?php if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) { ?>
                                                            <div class="para1">
                                                            <a class="cmn-btn notify-btn goto" href="<?=base_url();?>home/viewcart" style="display:block">Go to Cart</a></div>
                                                        <?php } else { ?>
                                                            <div class="number">
                                                                <span class="minus"><i
                                                                        class="fa fa-minus"></i></span>
                                                                <input type="text" value="1" name="quantity" />
                                                                <span class="plus plusss"><i class="fa fa-plus"></i></span>
                                                            </div>
                                                        <div>
                                                            <?php } ?>
                                                        <?php }
                                                    } ?>
                                                    <div class="product-card-btn">
                                                    <div class="number">
                                                                <span class="minus"><i
                                                                        class="fa fa-minus"></i></span>
                                                                <input type="text" value="1" name="quantity" />
                                                                <span class="plus plusss"><i class="fa fa-plus"></i></span>
                                                            </div>
                                                        </div>
                                                     <input type="hidden" value="<?php echo $cProducts[$i]['price'];?>" name="price" />
                                                                
                                                                <input type="hidden" value="<?php echo $this->session->userdata('customer_id');?>" name="customer_id" />
                                                                <!-- <a href="product_detail.html"> -->
                                                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                                                    <?php if(count($carts) == 0) { ?>
                                                                <button class="cmn-btn notify-btn"><i
                                                                        class="fa fa-shopping-cart" name="submit"></i>ADD</button>
                                                                <?php } ?>
                                                                <?php } else { ?>
                                                                

                                                            <button class="cmn-btn notify-btn notify-mee" >Notify me</button>
                                                            <?php } ?>
                                                        </div>

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
            <div id="menu1" class="tab-pane fade">
                <?php 
                if(count($cProducts) > 0) {
                    for ($i=0; $i < count($cProducts); $i++) { 
                ?>
                <form action="<?=base_url()?>home/insertshopcart" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">

                <div class="cart-inner list-item-products">
                    <div class="row row-align">
                        <div class="col-lg-2 col-md-2 col-xs-12 res-det">
                            <div class="cart-img">
                                <a href="<?=base_url();?>home/product_details/<?php echo $cProducts[$i]['product_id'];?>" title="product-images">
                                <img src="<?php echo $cProducts[$i]['product_image'];?>"
                                    alt="#" />
                                </a>
                            </div>
                            <div class="price-data1">
                                <h3 class=""><?php echo $cProducts[$i]['product_name'];?></h3>
                                <p><span class="price-details"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $cProducts[$i]['price'];?> /5kg</p>
                                <div class="rating-icon">
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-xs-12">
                            <div class="cart-details prodd-details">
                                
                                <div class="rating-icon rating-res" mb-2>
                                    <h3 class=""><?php echo $cProducts[$i]['product_name'];?></h3>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <P><?php echo $cProducts[$i]['description'];?></P>
                                <div class="price-data">
                                    <span class="price-details inc-dec-inputs"><i class="fa fa-inr"
                                            aria-hidden="true">
                                            <?php echo $cProducts[$i]['price'];?> /5kg</i>
                                        <div class="numm">
                                            <a href="product_detail.html">
                                                <div class="number">
                                                    <span class="minus"><i
                                                            class="fa fa-minus"></i></span>
                                                    <input type="text" value="1" name="quantity" />
                                                    <span class="plus plusss"><i class="fa fa-plus"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </span>
                                </div>
                                <input type="hidden" value="<?php echo $cProducts[$i]['price'];?>" name="price" />
                                <input type="hidden" value="<?php echo $cProducts[$i]['product_id'];?>" name="product_id" />
                                <input type="hidden" value="<?php echo $this->session->userdata('customer_id');?>" name="customer_id" />
                                <?php 
                                $carts = $cProducts[$i]['carts'];
                                ?>
                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                <?php if(count($carts) == 0) { ?>
                                <div class="btn-details1">
                                    <button type="submit" name="submit" class="cmn-btn notify-btn"><i class="fa fa-shopping-cart"></i> <b> ADD TO CART </b>
                                    </button>
                                </div>
                                <?php } else { ?>

                                   
                                <?php } ?>
                                <?php } else { ?>
                                    <div class="btn-details1">
                                   <a href="#" class="cmn-btn notify-btn" type="button"><i class="fa fa-shopping-cart"></i><b>Notify me</b></a>
                                </div>

                                <?php } ?>

                            </div>
                        </div>
                        <?php 
                                $carts = $cProducts[$i]['carts'];
                                ?>
                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>
                                <?php if(count($carts) == 0) { ?>
                                <div class="col-lg-2 col-md-2 col-xs-12">
                                    <div class="btn-details">
                                        <button type="submit"  name="submit" class="cmn-btn notify-btn"> <b> ADD TO CART </b> </button>
                                    </div>
                                </div>
                                <?php } else { ?>

                                   
                                <?php } ?>
                                <?php } else { ?>
                                <div class="col-lg-2 col-md-2 col-xs-12">
                                    <div class="btn-details">
                                        <a href="#" class="cmn-btn notify-btn" type="button" style="display:block"><i class="fa fa-shopping-cart"></i><b>Notify me</b></a>
                                    </div>
                                </div>

                                <?php } 
								
								if(count($carts) > 0) 
								{
                                    for ($k=0; $k < count($carts); $k++) 
									{ 
									
										if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) 
										{ ?>
										<div class="col-lg-2 col-md-2 col-xs-12">
											<div class="btn-details">
											<a class="cmn-btn notify-btn goto" href="<?=base_url();?>home/viewcart" style="display:block"><i class="fa fa-shopping-cart"></i> <b>Go to Cart</b></a></div>
										</div>
                                    <?php } 
									}
								} ?>
                        
                    </div>
                </div>
                </form>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</div>