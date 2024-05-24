  <style>

    .cart-number {
      justify-content: center;
      width: 100px;
    }

    .cart-number .minus {
      width: 20px !important;
      padding: 8px 0px;
    }

    .cart-number .plus {
      width: 20px !important;
      padding: 8px 0px;
    }

    .cart-increase {
        display: flex;
        justify-content: center;
    }


    @media (max-width: 468px) {
      .cart-increase {
        /*display: flex;*/
      }


      .cart-increase .number {
        width: 90px;
      }

      .valuee-11 {
        display: none !important;
      }
    }
  </style>

<div class="">
    <div class="box-right">
        <div class="cart hover-menu">
            <!-- <p class="icon-cart icon-user" title="user">
                <i class="fa fa-user"></i>
            </p> -->
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
            <?php if($this->session->userdata('customer_id') == '') {?>


                <?php }else { ?>
                     <p class="icon-cart" title="Add to cart">
                <i class="icon"></i>
                <span class="cart-count"><?php echo count($cartitems);?></span>
            </p>
                <?php } ?>
            
            <div class="cart-list list-menu">
               <ul class="list">
                    <?php if(count($cartitems) > 0) {
                        for ($i=0; $i < count($cartitems); $i++) {  ?>
                    <li>
                        <a href="<?=base_url();?>home/product_details/<?php echo $cartitems[$i]['product_id'];?>" title="" class="cart-product-image"><img src="<?php echo $cartitems[$i]['product_image'];?>" alt="Product"></a>
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