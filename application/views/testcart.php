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
  <div class="main-content">
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
                        <div class="carttest">
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
                                                 <div class="number cart-number">
                                                    <span class="minus" id="minus_<?php echo $cartitems[$i]['cart_id'];?>">-</span>
                                                    <!-- <input type="text" value="<?php echo $cartitems[$i]['quantity'];?>" /> -->
                                                    <input type="text" class="quantitydata qty-value1" name="quantity" id="quantitydata_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['quantity'];?>" cartid="quantitydata_<?php echo $cartitems[$i]['cart_id'];?>"  productid="<?php echo $cartitems[$i]['product_id'];?>" >
                                                    
                                                    <span class="plus" id="plus_<?php echo $cartitems[$i]['cart_id'];?>">+</span>
                                                    
                                                </div>
                                                <input type="hidden" name="prices" id="prices1_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['price'];?>">
                                            <?php } else { ?>
                                                <div class="number"><input type="text" class="qty-value1" value="<?php echo $cartitems[$i]['quantity'];?>" text-align="center" readonly></div>
                                            <?php } ?>
                                    </td>
                                    <td class="produc-price"  style="text-align: center;"><p class="closedd">
                                            <span class="cart_idssdata trashh" name="cart_id" id="<?php echo $cartitems[$i]['cart_id'];?>"><i class="fa fa-trash"></i></span>
                                            </p></td>
                                    <td class="add-cart res-add-carttt"  style="text-align: -webkit-center;">
                                        <?php if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){?>
                                                 <div id="totalproceed1_<?php echo $cartitems[$i]['cart_id'];?>"><span><i class="fa fa-inr"></i></span><?php echo ($cartitems[$i]['price']*$cartitems[$i]['quantity'])+$cartitems[$i]['gift'];?></div>
                                                 <div  style="display: none;" id="diss1_<?php echo $cartitems[$i]['cart_id'];?>">
                                                  <div style="display: flex; justify-content: center;">
                                                  <span><i class="fa fa-inr"></i></span><p id="price1_<?php echo $cartitems[$i]['cart_id'];?>"></p>
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
                                <div class="" id="tott1">
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

                                <div id="tott31" style="display: none;" class="checkout-details-section">
                                  <div style="display: flex; margin-left: 900px;">
                                    <h3><span>Total Amount:</span>&nbsp;&nbsp;<i class="fa fa-inr"></i></h3><h3 id="totalprice1" style="margin-left: 15px;"></h3>
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

                    <!-- <div class="carttest">
                    
                    </div> -->


                    </div>
                    <!-- End container -->
                </div>
                <!-- End cat-box-container -->
            </div>
        <?php } ?>
      

            



<script type="text/javascript">
  var baseurl = "<?php echo base_url();?>";
</script>


    <script>
    $(document).ready(function() {
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
    </script>

   <script type="text/javascript">
     $(document).ready(function(){
     $('.quantitydata').change(function(){
        // location.reload();
          var itemId = $(this).attr('id');
          
          var aa = itemId.split("_");
          var qty = $('#quantitydata_'+aa[1]).val();
          var price = $('#prices1_'+aa[1]).val();

          // var pri = price.val();
          var txtId = "#price1_"+aa[1];
          var txtIdpro = "#totalproceed1_"+aa[1];
          var txtpro = "#diss1_"+aa[1];
          var plus = "#plus_"+aa[1];
          var minus = "#minus_"+aa[1];
          $(txtId).empty();
          $('#totalprice1').empty();
          $(plus).hide();
          $(minus).hide();
          // console.log(pri);
          var url = baseurl+'home/changeQuantityData';
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
                          $('#tott1').hide();
                          $('#totalprice1').show();
                          $('#tott31').show();
                          $(txtId).append(parseFloat(qty)*parseFloat(price));
                          $('#totalprice1').append(res['price']);

                      }
                      else
                      {
                         alert("Out Of Stock");
                         location.reload();
                      }
                  }
              });
        });

     // $('body').on('click', '.cart_id', function(){
     //      // $('.testk').empty();
     //      $('.carttest').empty();
     //     var itemId = $(this).attr('id');
     //      var msg = '';
     //      var url = baseurl+'home/getTotalDatatcartItemList';
     //      $.ajax({
     //        url: url,
     //        type: 'POST',
     //        data: {customer_id: itemId},
     //        beforeSend: function() {
     //          $("#loading-image").show();
     //        // $('.testk').empty()
     //       },
     //        success: function(res){
     //            $("#loading-image").hide();
     //          // $('.testk').empty();
     //          // $('.datest').hide();
     //          $('.carttest').show();
     //          // $('.testcart').hide();
     //          // $('.what-icon').hide();
     //          // $('.testk').append(res);
     //          $('.carttest').append(res);
     //        }
     //    });
     //    });


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
        $('body').on('click', '.cart_idssdata', function(){
            // $('.testk').empty();
            $('.carttest').empty();
            // $('.carttest').hide();
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
                    // $('.testcart').remove();
                    $('.carttest').show();
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

        $('body').on('click', '.cart_idssdata', function(){
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


