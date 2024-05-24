<?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>

    <div class="main-content myaccount-wrapper">
            <div class="banner-header banner-lbook3 main-bannerr2">
            <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>My Account</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
           

            <section class="container product-detail-container">
                <div class="myaccount-section">
                    <div class="user-details-section">
                        <div class="card">

                            <div class="edit-btnn">                               
                                <div class="schedule-btnnnn">
                                    <div class="user-det-heading">
                                        <h3>User Details</h3>
                                    </div>
                                    <div class="user-acc-edit">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                          <i class="fa fa-pencil"></i>
                                        </button>
                                    </div>                            
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">First Name:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['customer_name'];?></p>
                                            </div>
                                      </div>
                                    </div>

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Email:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['email'];?></p>
                                            </div>
                                      </div>
                                    </div>    

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Postal Code:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['postal_code'];?></p>
                                            </div>
                                      </div>
                                    </div> 

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Town/Mandal:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['town_mandal'];?></p>
                                            </div>
                                      </div>
                                    </div>

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Address-1:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['address1'];?></p>
                                            </div>
                                      </div>
                                    </div>                                
                                </div>

                                <div class="col-md-6">
                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">City:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['city'];?></p>
                                            </div>
                                      </div>
                                    </div>                                    

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Phone:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['mobile_number'];?></p>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">District:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['district'];?></p>
                                            </div>
                                      </div>
                                    </div>

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">State:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['state'];?></p>
                                            </div>
                                      </div>
                                    </div> 

                                    <div class="myacc-user-details">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Address-2:</label>
                                            <div class="col-sm-8">
                                              <p><?php echo $customers['address2'];?></p>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>
        </div>


            <div class="myaccount-section">
                <div class="container product-detail-container">
                    <div class="myaccount">
                        <div class="">
                            <?php if(count($orderData) > 0){
                                for ($k=0; $k < count($orderData); $k++) { ?>
                            <div class="col-md-12 card">
                                <div class="order-no" data-toggle="collapse" data-target="#collapseOne<?php echo $k+1;?>" aria-expanded="true" aria-controls="collapseOne">
                                    <h4>Order ID:&nbsp;<?php echo $orderData[$k]['order_txn'];?></h4>
                                    <button class="btn btn-primary view-btn">View Details</button>
                                    <button class="view-eye-btn"><i class="fa fa-eye"></i></button>
                                </div>


                <div class="cart-box-container collapse" id="collapseOne<?php echo $k+1;?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="container container-ver2 res-orderss">
                    <div class="box cart-container myorder-box-total">
                        <table class="table cart-table space-30 table-responsive">
                            <thead>
                                <tr>
                                    <th class="product-photo">Product Name</th>
                                    <th class="produc-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="add-cart">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                $cartItems = $orderData[$k]['cartData'];
                                if($cartItems->num_rows() > 0){
                                foreach ($cartItems->result() as $key => $crIt) { ?>
                                <tr class="item_cart">
                                    <td class="product-photo">
                                        <div class="myorder_imagee">
                                            <img src="<?php echo $crIt->product_image;?>" alt="Futurelife">
                                        </div>
                                        <div>
                                            <p><?php echo $crIt->product_name;?></p>
                                        </div>
                                    </td>
                                    <!-- <td class="produc-name"><a href="#" title=""><?php echo $crIt->product_name;?></a></td> -->
                                    <td class="produc-price"><input value="₹<?php echo $crIt->price;?>" size="4" type="text"></td>
                                    <td class="produc-price"><input value="<?php echo $crIt->quantity;?>" size="4" type="text"></td>
                                    <td class="add-cart res-order-price"><span><i class="fa fa-inr"></i></span><?php echo $crIt->price*$crIt->quantity;?></td>
                                </tr>
                            <?php } 
                             } ?>
                            </tbody>
                        </table>


                    </div>
                    <!-- End container -->
                </div>
                <!-- End cat-box-container -->
            </div>

							
                            <div class="col-md-12">
                            <div class="row order-row">
                                <div class=" myorder-col">
                                    <h3>Order On&nbsp;:&nbsp;<span style="color: #385ead"><?php echo date('d M Y', strtotime($orderData[$k]['created_at']));?></span></h3>
                                </div>
                                <!-- <div class="col-md-4">&nbsp;</div> -->
                                <div class="myorder-col">

                                    <?php if($orderData[$k]['shipping_fee'] == '' || $orderData[$k]['shipping_fee'] == 'FREE SHIPPING') {
                                        $shipping_fee = 0;
                                    }else { 
                                        $shipping_fee = $orderData[$k]['shipping_fee'];
                                    }?>
                                    <h3 class="pull-right">Order Value&nbsp;:&nbsp;<span style="color: #385ead">₹&nbsp;<?php echo number_format($orderData[$k]['total_price'])?></span></h3>
                                </div>
                            </div>
                            <!-- <div class="order-details">
                            
                            
                            </div> -->
                            </div>
                            </div>
                            
                        <?php }
                         } ?>
                        </div>
                    </div>
                </div>
            </div>

    <style>
        .product-detail-container {
            max-width: 1200px;
            margin: auto;
        }

        .myaccount-section .card {
            background-color: #fff;
            padding: 30px 20px;
            border-radius: 5px;
            box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
            border-color: rgba(223, 225, 229, 0);
            margin: 10px 0px 18px 0px;
        }

        .schedule-btnnnn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-det-heading h3 {
            font-size: 25px;
            font-weight: bold;
        }

        .user-acc-edit button {
            border-radius: 5px;
        }

        .btn:last-child {
            margin-right: 0px;
        }

        .user-details-section button {
            height: 45px;
            width: 50px;
        }

        .user-acc-edit button {
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 10px !important;
        }

        .myacc-user-details label {
            font-weight: 100;
        }

        .myacc-user-details p {
            font-weight: bold;
        }

        .user-details-section p {
            font-size: 16px;
        }

        .order-no {
            display: flex;
            justify-content: space-between;
            padding-bottom: 15px;
            align-items: center;
            flex-wrap: wrap;
        }

        .view-btn {
            width: 170px;
            height: 35px;
            margin-right: 0;
        }

        .view-eye-btn {
            display: none;
        }

        .order-no i {
            color: #80b435;
            cursor: pointer;
        }

        .cart-box-container {
            margin: 15px 0px;
        }

        .collapse {
            display: none;
        }

        .res-orderss {
            width: 100% !important;
        }

        .myorder-box-total {
            width: 100% !important;
        }

        .space-30 {
            margin-bottom: 30px !important;
        }

        .table {
            background-color: #fff;
            box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
            border-color: rgba(223, 225, 229, 0);
        }

        table.table.cart-table thead {
            background: #80b435;
        }

        table.table.cart-table thead th:first-child {
            padding-left: 30px;
        }

        table.table.cart-table thead th.add-cart {
            text-align: right;
            padding-right: 20px;
        }

        table.table.cart-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        table.table.cart-table td.product-photo {
            max-width: 200px;
            /* width: 250px; */
            display: flex;
            align-items: center;
        }

        table.table.cart-table td.product-photo img {
            width: 130px;
            padding: 20px;
        }

        table.table.cart-table td.produc-price,
        table.table.cart-table td.product-quantity,
        table.table.cart-table td.total-price {
            width: 15%;
        }

        table.table.cart-table td {
            padding: 0px 0px;
            vertical-align: middle;
        }

        table.table.cart-table td.produc-price input {
            border: none;
            font: 400 18px 'Mulish', sans-serif;
            color: #666;
        }

        input {
            height: 34px;
            width: 60px;
            text-align: center;
            /* font-size: 20px; */
            /* border: 1px solid #ddd; */
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
        }

        table.table.cart-table td.add-cart {
            text-align: right;
            padding: 0 30px;
        }

        span {
            cursor: pointer;
        }

        table.table.cart-table td.add-cart i {
            margin-right: 8px;
        }

        .order-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .myorder-col {
            padding: 0;
            min-width: 50%;
        }

        .pull-right {
            float: right !important;
        }

        @media (max-width: 330px) {}
    </style>

          <script type="text/javascript">
    $(document).ready(function(){
        $('.quantity').change(function(){
            $('#product_pricee').empty();
             $('#productsssss').empty();
            // var qty = $(this).attr('id');
            // var aa = qty.split("_");
            var price2 = $('#priced2').val();
            var price3 = $('#priced3').val();
            var price4 = $('#priced4').val();
            var quantity = $('#quantity').val();

           if(parseFloat(quantity) == 1 || parseFloat(quantity) == 2) {
               var tot_amount = parseFloat(price2) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price2);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
           }else if(parseFloat(quantity) == 3 || parseFloat(quantity) == 4) {
               var tot_amount = parseFloat(price3) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price3);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
            }else {
               var tot_amount = parseFloat(price4) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price4);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
            }
            
        });
      });
    </script>

    <script type="text/javascript">
    var baseurl = "<?php echo base_url();?>";
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
 <script type="text/javascript">
//     $(document).ready(function(){
//         $('body').on('click', '.cart_id', function(){
//           var id = $(this).attr('id');
//           var url = baseurl+'home/deleteCart';
//           location.reload();
//           $.ajax({
//               url: url,
//               type: 'POST',
//               dataType: 'json',
//               data:{cart_id:id},
//               success: function (res) {
//                   if(res['status'] == "pass")
//                   {
//                     location.reload();
//                   }
//                   else
//                   {
//                      alert("somethig went wrong");
//                      location.reload();
//                   }
//               }
//           });
//       })
//     });
// </script>


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

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog delivery-modal " role="document">
    <div class="modal-content">
      <div class="modal-header mo-header">
        <div class="edit-uset-heading">
            <h3>Edit User Details</h3>
         </div>
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <div class="myorder-modalll">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    <div class="modal-body mo-modal">  
    <form class="form-horizontal"action="<?=base_url()?>home/updateprofile/<?php echo $customers['customer_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">      
        <div class="row">
             <div class="col-md-6">
                 <div class="editing-user-details">
                    <label>First Name</label>
                    <input class="form-control" type="text" placeholder="Your First Name"  name="customer_name" value="<?php echo $customers['customer_name'];?>">
                 </div>
                 <div class="editing-user-details">
                    <label>Email</label>
                    <input class="form-control" type="text" placeholder="Your Email" name="email" value="<?php echo $customers['email'];?>" readonly>
                 </div>

                 <div class="editing-user-details">
                    <label>Postal Code</label>
                    <input class="form-control" type="text" placeholder="Your Postal Code" name="postal_code" value="<?php echo $customers['postal_code'];?>">
                 </div>

                 <div class="editing-user-details">
                    <label>Town/Mandal</label>
                    <input class="form-control" type="text" placeholder="Your Town/Mandal"  name="town_mandal" value="<?php echo $customers['town_mandal'];?>">
                 </div>

                 <div class="editing-user-details">
                    <label>State</label>
                    <input class="form-control" type="text" placeholder="Your State"  name="state" value="<?php echo $customers['state'];?>">
                 </div>

                 <div class="editing-user-details">
                    <label>Address-2</label>
                    <input class="form-control" type="text" placeholder="Your Address-2"  name="address2" value="<?php echo $customers['address2'];?>">
                 </div>
             </div>

             <div class="col-md-6">

                <div class="editing-user-details">
                    <label>Last Name</label>
                    <input class="form-control" type="text" placeholder="Your Last Name"  name="last_name" value="<?php echo $customers['last_name'];?>">
                 </div>
                 

                 <div class="editing-user-details">
                    <label>Phone</label>
                    <input class="form-control" type="number" placeholder="Your Phone No"  name="mobile_number" value="<?php echo $customers['mobile_number'];?>" readonly>
                 </div>

                 <div class="editing-user-details">
                    <label>City</label>
                    <input class="form-control" type="text" placeholder="Your City"  name="city" value="<?php echo $customers['city'];?>">
                 </div>

                 <div class="editing-user-details">
                    <label>District</label>
                    <input class="form-control" type="text" placeholder="Your District"  name="district" value="<?php echo $customers['district'];?>">
                 </div>

                 <div class="editing-user-details">
                    <label>Address-1</label>
                    <input class="form-control" type="text" placeholder="Your Address-1"  name="address1" value="<?php echo $customers['address1'];?>">
                 </div>
             </div>

             <div class="col-md-12">
                <div class="edit-mo-button">
                    <button type="submit" class="btn" name="submit">Submit</button>
                </div>
             </div>
        </div>
    </form>
    </div>      
    </div>
  </div>
</div>