<style>
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

        .para a {
            color: white;
            background-color: #dd192b;
         }

         .para1 a {
            color: white;
            background-color: #30d4d4;
         }

         .cartitem {
            background-color: #d4303f;
            color: white;
         }

         .cartitem1 {
            background-color: #30d4d4;
            color: white;
         }

         @media (max-width: 468px) {
            .door-step-img img {
                height: 170px;
            }
         }

         @media (min-width: 469px) and (max-width: 768px) {
            .door-step-img img {
                height: 300px;
            }
         }


</style>

<div class="container container-ver2" id="our_prodcts">
            <div class="title-text-v2">
                <h3>Our Products</h3>
            </div>
            <div class="owl-carousel">
                <?php if(count($cProducts) > 0) {
                        for ($i=0; $i < count($cProducts); $i++) { 
                           ?>
                <div class="product-card-test">
                    <div class="product-container">
                        <div class="product-name">
                            <h4><?php echo $cProducts[$i]['product_name'];?> </h4>
                            <p> <?php echo $cProducts[$i]['min_max_price'];?> </p>
                        </div>
                        <a href="<?=base_url();?>home/product_details/<?php echo $cProducts[$i]['product_id'];?>">
                        <div class="product-image">
                            
                            <img src="<?php echo $cProducts[$i]['product_image'];?>">
                        </div>
                        </a>
                         <!-- <?php if(($bProducts[$i]['stock']-$bProducts[$i]['outward']) > 0){?>
                                                 
                        <?php } else { ?>
                            <div class="para">
                            <h3 style="margin: 10px 0px" align="center">Out Of Stock</h3></div>
                        <?php } ?> -->

                        <form action="<?=base_url()?>home/inserthomecart" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                        <div class="offer-price">
                        	<div class="offer_buyy">
                        		<h3> OFFER PRICE </h3>
                        	</div>

                            <?php 
                             $sizes = $cProducts[$i]['sizes'];
                            if(count($sizes) > 0){?>
                                <?php for ($j=0; $j < count($sizes); $j++) { 
                                    if($sizes[$j]['status'] == 0) { ?>
                                     <?php } else { ?>
                            <p><?php echo $sizes[$j]['size'];?> - &nbsp;<span class="product-price">$<?php echo $sizes[$j]['price'];?></span></p>
                        <?php } ?>
                                                                
                            <?php }
                             } ?>
                        </div>

                        <?php 
                        $carts = $cProducts[$i]['carts'];
                        ?>

                        <?php if(count($carts) > 0) {
                                    for ($k=0; $k < count($carts); $k++) { ?>

                        <?php if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) { ?>
                                     <div class="para1">
                                    <a class="btn-primary btn cart-btn cartitem1" href="<?=base_url();?>home/viewcart">Go to Cart</a></div>
                                <?php } else { ?>

                                    <div class="number">
                                        <span class="minus">-</span>
                                        <?php if($cProducts[$i]['product_id'] == 4) {
                                        $quantity = 5;

                                        }else {
                                        $quantity = 1 ;
                                        }?>
                                        <input class="increment-number" type="text" value="<?php echo $quantity;?>" name="quantity" class="quantitysystem" id="quantitysystem_<?php echo $this->session->userdata('customer_id');?>"/>
                                        <span class="plus">+</span>
                                    </div>
                                    <input type="hidden" name="product_id" class="form-control" value="<?php echo $bProducts[$i]['product_id'];?>">
                                    <input type="hidden" name="customer_id" class="form-control" value="<?php echo $this->session->userdata('customer_id');?>">
                                <?php } ?>

                                 <?php } 
                        } ?>


                                
                            
                        
                        <div class="cart-btn-container">
                            <!-- <a href="<?=base_url();?>home/product_details/<?php echo $bProducts[$i]['product_id'];?>">
                                <button class="btn btn-primary cart-btn">Add to cart</button>
                            </a> -->
                                <?php if(($cProducts[$i]['stock']-$cProducts[$i]['outward']) > 0){?>

                                    <?php if(count($carts) == 0) { ?>
                                      <?php if($cProducts[$i]['product_id'] == 4) {
                                        $quantity = 5;

                                        }else {
                                        $quantity = 1 ;
                                        }?>  
                                  <div class="number">
                                    <span class="minus">-</span>
                                    <input class="increment-number" type="text" value="<?php echo $quantity;?>" name="quantity" />
                                    <span class="plus">+</span>
                                </div>
                                <input type="hidden" name="product_id" class="form-control" value="<?php echo $cProducts[$i]['product_id'];?>">
                                <input type="hidden" name="customer_id" class="form-control" value="<?php echo $this->session->userdata('customer_id');?>">

                                <input type="submit" class="btn btn-primary cart-btn" id="submit2233" name="submit" title="Add to cart" value="Add to cart" >

                                <a href="#" class="edit-button countryUpdate" customerid="<?php echo $this->session->userdata('customer_id');?>" productid="<?php echo $cProducts[$i]['product_id'];?>" id="next">Add to cart</a>
                                <?php } else { ?>

                                   
                                <?php } ?>

                                <?php } else { ?>
                                    <div class="para">
                                    <a class="btn-primary btn cart-btn">Out Of Stock</a></div>
                                <?php } ?>

                            

                              <!--   <?php 
                                $carts = $cProducts[$i]['carts'];
                                if(count($carts) > 0) {
                                    for ($k=0; $k < count($carts); $k++) { ?>

                                <?php if($cProducts[$i]['product_id'] == $carts[$k]['product_id']) {  ?>
                                    <div class="para1">
                                    <a class="btn-primary btn cart-btn cartitem1" href="<?=base_url();?>home/viewcart">Go to Cart</a></div>
                                <?php } else { ?>
                                    <input type="submit" class="btn btn-primary cart-btn" id="submit2233" name="submit" title="Add to cart" value="Add to cart" >
                                <?php } ?>
                                 } -->
                                                 
                               
                                    <!-- <div class="para">
                                    <a class="btn-primary btn cart-btn">Out Of Stock</a></div> -->
                               <!--  <?php } 
                                } ?> -->
                    </div>
                </form>
                    </div>
                </div>
            <?php  }
             } ?>
            </div>
        </div>