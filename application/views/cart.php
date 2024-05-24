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

    table.table.cart-table td.product-photo img {
        width: 130px;
        height: 130px;
    }


    @media (max-width: 468px) {
      .cart-increase {
        display: revert !important;
      }


      .cart-increase .number {
        width: 90px;
      }

      .valuee-11 {
        display: none !important;
      }
    }
  </style>


  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>



        <?php if($this->session->flashdata('success_msg')){ 
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>

     <div class="main-content">
            <div class="banner-header banner-lbook3 main-bannerr">
            <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>Cart</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
            <?php if(count($cartitems) <= 0) {?>
            <div class="cart-box-container">
                <div class="container container-ver2">
                    <div class="box cart-container res-table-section items-empty">
                        <h3 align="center">Your Cart items list is empty</h3>

                        <div class="continue-shopping cont-shopp">
                            <a href="<?=base_url()?>home#our_prodcts">
                                <button type="button" class="btn btn-primary cart-btn continue-shopping">Continue Shopping</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <?php } else { ?>
            <div class="cart-box-container">
                <div class="container container-ver2">
                    <div class="box cart-container">
                        <div class="testcart">
                        <table class="table cart-table space-30">
                            <thead>
                                <tr>
                                    <th class="product-photo">Product Name</th>
                                    <!-- <th class="produc-name"></th> -->
                                    
                                    <th class="produc-price valuee-11" style="text-align: center;">Price</th>
                                    <th class="product-quantity"  style="text-align: center;">Quantity</th>
                                    <!-- <th class="produc-name"  style="text-align: center;">Gift Box</th> -->
                                    <th ss="add-cart"  style="text-align: center;">Remove</th>
                                    <th class="add-cart"  style="text-align: revert;">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  ?>
                                <tr>
                                    <div class="cart-itemsss-section">
                                        <td class="product-photo">
                                        <a href="<?=base_url();?>home/product_details/<?php echo $cartitems[$i]['product_id'];?>">
                                        <img src="<?php echo $cartitems[$i]['product_image'];?>" alt="Img">
                                        </a>
                                        <div class="prod-namee">
                                          <?php echo $cartitems[$i]['product_name'];?>
                                          <div class="item-value i-11">
                                            <span><i class="fa fa-inr"></i></span><input value="<?php echo $cartitems[$i]['price'];?>" size="4" type="text" readonly>
                                          </div>
                                        </div>
                                    </td>
                                    <!-- <td class="produc-name"></td> -->
                                    
                                    <td class="produc-price valuee-11"  style="text-align: center;">
                                      <div class="item-value">
                                        <span><i class="fa fa-inr"></i></span><input value="<?php echo $cartitems[$i]['price'];?>" size="4" type="text" readonly>
                                      </div>
                                    </td>

                                    <td class="cart-increase cart-res-increasee"  style="text-align: center; border: none;">
                                         <?php if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){?>
                                                 <div class="number cart-number" id="cart-number">
                                                    <span class="minus" id="minus1_<?php echo $cartitems[$i]['cart_id'];?>">-</span>
                                                    <input type="text" class="quantity qty-value1" name="quantity" id="quantity_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['quantity'];?>" cartid="quantity_<?php echo $cartitems[$i]['cart_id'];?>"  productid="<?php echo $cartitems[$i]['product_id'];?>" >
                                                    
                                                    <span class="plus"  id="plus1_<?php echo $cartitems[$i]['cart_id'];?>">+</span>
                                                    
                                                </div>
                                                <input type="hidden" name="prices" id="prices_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['price'];?>">
                                            <?php } else { ?>
                                                <div class="number"><input type="text" class="qty-value1" value="<?php echo $cartitems[$i]['quantity'];?>" text-align="center" readonly></div>
                                            <?php } ?>
                                    </td>
                                    <!-- <td style="text-align: center;">
                                      <?php if($cartitems[$i]['check'] == 1) {?>
                                        <input type="checkbox" class="check input-cart" name="check" id="check_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['check'];?>" cartid="quantity_<?php echo $cartitems[$i]['cart_id'];?>" checked/>
                                        <?php } else { ?>
                                          <input type="checkbox" class="check input-cart" name="check" id="check_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['check'];?>" cartid="quantity_<?php echo $cartitems[$i]['cart_id'];?>"/>
                                        <?php } ?>
                                    </td> -->
                                    <td class="produc-price"  style="text-align: center;"><p class="closedd">
                                            <span class="cart_idss trashh" name="cart_id" id="<?php echo $cartitems[$i]['cart_id'];?>"><i class="fa fa-trash"></i></span>
                                            </p></td>
                                    <td class="add-cart res-add-carttt"  style="text-align: -webkit-center;">
                                        <?php if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){?>
                                                 <div id="totalproceed_<?php echo $cartitems[$i]['cart_id'];?>"><span><i class="fa fa-inr"></i></span><?php echo ($cartitems[$i]['price']*$cartitems[$i]['quantity'])+$cartitems[$i]['gift'];?></div>
                                                 <div  style="display: none;" id="diss_<?php echo $cartitems[$i]['cart_id'];?>">
                                                  <div style="display: flex; justify-content: center;">
                                                  <span><i class="fa fa-inr"></i></span><p id="price_<?php echo $cartitems[$i]['cart_id'];?>"></p>
                                                </div>
                                                </div>
                                            <?php } else { ?>
                                                <h3>Out Of Stock</h3>
                                            <?php } ?>
                                        </td>
                                    </div>
                                </tr>
                            <?php } 
                             } ?>
                            </tbody>
                        </table>

                

                        <div class="col-md-12">
                            <div class="checkout-details-section">
                                <div class="" id="tott">
                                    <h3><span>Total Amount:</span>&nbsp;&nbsp;<i class="fa fa-inr"></i><?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         $product = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                         

                                                if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
                                                    $tot_price = ($cartitems[$i]['price']*$cartitems[$i]['quantity'])+$cartitems[$i]['gift'];
                                                    $prices = $tot_price + $prices;
                                                    $product = 1;
                                                } else { 
                                                    $tot_price = 0;
                                                    $prices = $tot_price + $prices;
                                                    $product = 2;
                                                 } 

                                                
                                                ?>
                                                    <?php }
                                                } ?>
                                        <?php echo $prices;?></h3>
                                </div>

                                <div id="tott3" style="display: none;" class="d-md-block d-block">
                                  <div style="display: flex;">
                                    <h3><span>Total Amount:</span>&nbsp;&nbsp;<i class="fa fa-inr"></i></h3><h3 id="totalprice" style="margin-left: 15px;"></h3>
                                  </div>
                                </div>

                                <div class="cart-checkout">
                                    <a href="<?=base_url();?>home/checkout">
                                        <button class="btn">Proceed To Checkout</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="carttest" style="margin-top: -15px; margin-left: -15px;">
                        
                        </div>


                    </div>
                    <!-- End container -->
                </div>
                <!-- End cat-box-container -->
            </div>
        <?php } ?>
      

            



    <script type="text/javascript">
    var baseurl = "<?php echo base_url();?>";
</script>

   <script type="text/javascript">
     $(document).ready(function(){
     $('.quantity').change(function(){
      $('.quantity').empty();
        // location.reload();
          var itemId = $(this).attr('id');


          
          var aa = itemId.split("_");
          var qty = $('#quantity_'+aa[1]).val();
          var price = $('#prices_'+aa[1]).val();

          // var pri = price.val();
          var txtId = "#price_"+aa[1];
          var txtIdpro = "#totalproceed_"+aa[1];
          var txtpro = "#diss_"+aa[1];
          var plus = "#plus1_"+aa[1];
          var minus = "#minus1_"+aa[1];

          var cartid = aa[1];

          $(txtId).empty();
          $('#totalprice').empty();
          // $('#cart-number').hide();
          $(plus).hide();
           $(minus).hide();
          
          

          var url = baseurl+'home/changeQuantity';
              // location.reload();
              $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: 'json',
                  data:{cart_id : aa[1], quantity:qty},
                  success: function (res) {

                      // console.log(res['status']);
                      if(res['status'] == "pass")
                      {
                          // $('.testcart').hide();
                          $(txtIdpro).hide();
                          $(txtId).show();
                          $(txtpro).show();
                          $(plus).show();
                          $(minus).show();
                          // $('#cart-number').show();
                          // $('#cart-number').append('<span class="minus">-</span><input type="text" class="quantity qty-value1" name="quantity" id="#totalproceed_"+v.cartid+; value="+v.qty+" cartid="quantity_"+v.cartid+ ><span class="plus">+</span>');
                          $('#tott').hide();
                          $('#totalprice').show();
                          $('#tott3').show();
                          $(txtId).append(parseFloat(qty)*parseFloat(price));
                          $('#totalprice').append(res['price']);


                      }
                      else
                      {
                         alert("Out Of Stock");
                         location.reload();
                      }
                  }
              });
        });

     


   });
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

<script type="text/javascript">
     $(document).ready(function(){
     $('.check').change(function(){
        // location.reload();
          var itemId = $(this).attr('id');
          var aa = itemId.split("_");
          var qty = $('#check_'+aa[1]).val();
          var url = baseurl+'home/changeCheck';
              // location.reload();
              $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: 'json',
                  data:{cart_id : aa[1], check:qty},
                  success: function (res) {

                      // console.log(res['status']);
                      if(res['status'] == "pass")
                      {
                          // $('.testcart').hide();
                      }
                      else
                      {
                         alert("Out Of Stock");
                      }
                  }
              });
        });

      $('.check').change(function(){
          // $('.testk').empty();
          $('.carttest').empty();
         var itemId = $(this).attr('id');
          var msg = '';
          var url = baseurl+'home/getTotalDatatcartItemList';
          $.ajax({
            url: url,
            type: 'POST',
            data: {customer_id: itemId},
            beforeSend: function() {
              $("#loading-image").show();
            // $('.testk').empty()
           },
           //  beforeSend: function() {
           //    $("#loading-image").show();
           //  // $('.testk').empty()
           // },
            // dataType: 'json',
            success: function(res){
                $("#loading-image").hide();
              // $('.testk').empty();
              // $('.datest').hide();
              $('.carttest').show();
              $('.testcart').hide();
              // $('.what-icon').hide();
              // $('.testk').append(res);
              $('.carttest').append(res);
            }
        });
        });
        });
      </script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('body').on('click', '.cart_idss', function(){
            // $('.testk').empty();
            $('.carttest').hide();
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
                    // $('.datest').hide();
                    $('.testcart').remove();
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

        $('body').on('click', '.cart_idss', function(){
          // $('.testk').empty();
          $('.carttest').empty();
         var itemId = $(this).attr('id');
          var msg = '';
          var url = baseurl+'home/getTotalDatatcartItemList';
          $.ajax({
            url: url,
            type: 'POST',
            data: {customer_id: itemId},
            beforeSend: function() {
              $("#loading-image").show();
            // $('.testk').empty()
           },
           //  beforeSend: function() {
           //    $("#loading-image").show();
           //  // $('.testk').empty()
           // },
            // dataType: 'json',
            success: function(res){
                $("#loading-image").hide();

              // $('.testk').empty();
              // $('.datest').hide();
              $('.carttest').show();
              $('.testcart').remove();
              // $('.what-icon').hide();
              // $('.testk').append(res);
              $('.carttest').append(res);
            }
        });
        });
     });
</script>