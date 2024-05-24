    <style>
        .col-md-7 {
            max-width: 700px !important;
        }

        .col-md-5 {
            max-width: 500px !important;
        }

        .right-side .box .title-brand {
            color: #ed7d39;
            /*font-size: 22px;*/
        }

        .left-side .title-brand {
            color: #ed7d39;
            /*font-size: 22px;*/
        }

        .check-out .form-horizontal label.control-label {
            font-size: 12px;
        }

        .review-submit-btn button {
            background: #3f8f4b;
            border-radius: 5px;
            height: auto;
            padding: 13px 40px;
            /*width: auto;*/
            border: 1px solid #3f8f4b;
            margin: 15px 0px;
            color: #fff;
            font-size: 15px;
            transition: 0.3s ease-in-out
        }

        .review-submit-btn button:hover {
            color: #3f8f4b;
            background-color: #fff;
            border: 1px solid #3f8f4b;
        }

        .input-type {
            height: 15px;
            width: 15px;
        }

        @media (max-width: 768px) {
            .col-md-7 {
                padding: 0px
            }

            .col-md-5 {
                padding: 0px
            }

            .left-side {
                margin: 15px 0px
            }

            .right-side .box .title-brand {
                color: #ed7d39;
                font-size: 22px;
            }

            .left-side .title-brand {
                color: #ed7d39;
                font-size: 22px;
            }

            .info-order .product-name .name {
                width: 170px
            }

            .check-res {
                padding: 0px;
            }

        }
		
		.is_community_gated_div
		{
			display:none;
		}
    </style>
<div class="main-content">
            <div class="banner-header banner-lbook3 main-bannerr">
            <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>Checkout</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
            <!-- <div class="container container-ver2 space-padding-tb-30">
                    <div class="row head-cart">
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">01</p>
                                <h3>Shopping cart</h3>
                            </div>
                        </div>
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">02</p>
                                <h3>Check out</h3>
                            </div>
                        </div>
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">03</p>
                                <h3>Order completed</h3>
                            </div>
                        </div>
                    </div>
            </div> -->
            <!-- End container -->
			
            <div class="cart-box-container check-out">
                <div class="container container-ver2">
                    <div class="row">
                       <!--  <p id="datasystem1"> </p>
                          
                        <p id="datasystem22">
                        </p>
 -->
                        <!-- <p class="stststs"> -->
                            <form action="<?=base_url()?>home/ccavRequestHandler" role="form" id="datassfsre userForm" name="userForm" method="post" class="form-horizontal" enctype="multipart/form-data"> 
                            <!-- </p> -->
                         
                        <div class="">
                            <div class="col-md-12 col-lg-7 check-res">
                                <div class="left-side">
									<?php 
									if($customers['community_id']!="" && $customers['is_gated_community'] == 1)
									{
										$discount_array = $this->um->getCommunityDiscount("tbl_community",$customers['community_id']);
										$discount_value = $discount_array['discount'];
										$consignment_date =  $discount_array['consignment_date'];
									}
									else
									{
										$discount_value = 0;
										$consignment_date =  "";
									}
									?>
                                    <div>
                                        <div id="AddPassport">
                                            <h3 class="title-brand">SHIPPING ADDRESS</h3>
												<div class="">
													<input type="checkbox" name="is_gated_community" id="is_gated_community"  >
													<label>Gated Community</label>
												</div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputfname" class=" control-label">First Name <span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your first name..." id="inputfname"
                                                        class="form-control" value="<?php echo $customers['customer_name'];?>" name="customer_name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputlname" class=" control-label">Last Name <span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your last name..." id="inputlname"
                                                        class="form-control" value="<?php echo $customers['last_name'];?>" name="last_name" required>
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label for="inputlname" class=" control-label">Email <span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Email..." id="email"
                                                        class="form-control" name="email" value="<?php echo $customers['email'];?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputphone" class=" control-label">Phone<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your phone..." id="inputphone"
                                                        class="form-control" value="<?php echo $customers['mobile_number'];?>" name="mobile_number" required>
                                                </div>
												
												<div class="form-group col-md-6 is_community_gated_div">
                                                    <label for="inputemail" class=" control-label">CITY<span
                                                            class="color">*</span></label>
                                                    <select class="form-control" name="city" id="cityChange">
                                                        <?php 
														if($customers['city']!="")
														{
															echo '<option value="'.$customers['city'].'" selected style="display:none">'.$customers['city'].'</option>';
														}
														else
														{
															echo '<option value="">Select City </option>';
															
														}
														if(count($cities)!=0)
														{
															for($i=0;$i<count($cities);$i++)
															{
																echo '<option value="'.$cities[$i]['city_name'].'">'.$cities[$i]['city_name'].'</option>';
															}
														}
														?>
                                                    </select>
                                                </div>
												
												
												
												<div class="form-group col-md-6 is_community_gated_div">
                                                    <label for="inputphone" class=" control-label">Appartment<span
                                                            class="color">*</span></label>
                                                    <select class="form-control" name="appartment" id="appartment1">
														<?php 
														if($customers['appartment']!="")
														{
															echo '<option value="'.$customers['community_id'].'-'.$customers['appartment'].'" selected style="display:none">'.$customers['appartment'].'</option>';
														}
														else
														{
															echo '<option value="">Select Appartment </option>';
														}
														?>
                                                    </select>
                                                </div>
												
												<div class="form-group col-md-6 is_community_gated_div">
                                                    <label for="inputphone" class=" control-label">Block<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Block ..." id="block-input"
                                                        class="form-control" name="block" value="<?php 
														echo $customers['block'];?>">
                                                </div>
												
												<div class="form-group col-md-6 is_community_gated_div">
                                                    <label for="inputphone" class=" control-label">Flat no.<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Flat No. ..." id="flat-input"
                                                        class="form-control" name="flat_no" value="<?php 
														echo $customers['flat_no'];?>">
                                                </div>
												
												
                                                <div class="form-group col-md-6 not_gated_community">
                                                    <label for="inputemail" class=" control-label">ADDRESS 1<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Address 1..." id="add1"
                                                        class="form-control" name="address1" value="<?php echo $customers['address1'];?>" required>
                                                </div>
                                                <div class="form-group col-md-6 not_gated_community">
                                                    <label for="inputemail" class=" control-label">ADDRESS 2<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Address 2..." id="add2"
                                                        class="form-control" name="address2" value="<?php echo $customers['address2'];?>" required>
                                                </div>

                                                <div class="form-group col-md-6 not_gated_community">
                                                    <label for="inputemail" class=" control-label">TOWN/MANDAL<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Town/Mandal..." id="town1"
                                                        class="form-control" name="town_mandal" value="<?php echo $customers['town_mandal'];?>" required>
                                                </div>
                                                

                                                <div class="form-group col-md-6 not_gated_community">
                                                    <label for="inputemail" class=" control-label">DISTRICT<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your District..." id="district1"
                                                        class="form-control" name="district" value="<?php echo $customers['district'];?>" required>
                                                </div>
                                                <div class="form-group col-md-6 not_gated_community">
                                                    <label for="inputemail" class=" control-label">STATE<span
                                                            class="color">*</span></label>
                                                    <select class="form-control" name="state" id="state1" required>
														<?php 
														if($customers['state']!="")
														{
															echo '<option value="'.$customers['state'].'" selected style="display:none">'.$customers['state'].'</option>';
														}
														else
														{
															echo '<option value="">Select State</option>';
														}
														?>
                                                       
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tamilnadu">Tamilnadu</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6" >
                                                    <label for="inputpostcode" class=" control-label">PIN<span
                                                            class="color">*</span></label>
                                                    <input type="text" placeholder="Enter your Pincode..." class="pincode form-control" name="postal_code" maxlength="7" id="value1" required>
													<p id="pincode_msg" style="color:red"></p>
                                                        <!-- <p id="zipcodes"></p> -->
                                                    <input type="hidden" name="" class="selected_pincode form-control" id="selected_pincode">
                                                    <input type="hidden" id="shipping_price" rows="1"  class="amountcount" name="shipping_price" value="0" >
                                                </div>
												<div class="form-group col-md-6 is_community_gated_div" >
                                                    <label for="consignment_date" class=" control-label">Consignment Date<span class="color">*</span> </label>
                                                    <input type="text" placeholder="Enter your Consignment Date..." id="consignment_date" class="form-control" name="consignment_date" value="<?php echo $consignment_date;?>" />
                                                </div>
												
                                        </div>
                                    </div>
									
									

                                    <div class="billing-checkboxx">
                                        <label><input type="checkbox" class="input-type" name="check" id="chkPassport" value="1"> Billing address is not same as the shipping address</label>
                                    </div>

                                    <div class="form-horizontal" id="dvPassport">
                                        <!-- <div class="billing-add">
                                            <h3 class="title-brand">BILLING ADDRESS</h3>
                                            <div class="form-group col-md-6">
                                                <label for="inputfname" class=" control-label">First Name <span
                                                        class="color">*</span></label>
                                                <input type="text" placeholder="Enter your first name..." id="inputfname"
                                                    class="form-control" name="customer_name1" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputlname" class=" control-label">Last Name <span
                                                        class="color">*</span></label>
                                                <input type="text" placeholder="Enter your last name..." id="inputlname"
                                                    class="form-control" name="last_name1" required>
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for="inputlname" class=" control-label">Email <span
                                                        class="color">*</span></label>
                                                <input type="text" placeholder="Enter your last name..." id="email"
                                                    class="form-control" name="email1" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputphone" class=" control-label">Phone<span
                                                        class="color">*</span></label>
                                                <input type="text" placeholder="Enter your phone..." id="inputphone"
                                                    class="form-control" name="mobile_number1" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">TOWN/MANDAL</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="town_mandal1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">CITY</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="city1">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">DISTRICT</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="district1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">STATE</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="state1">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">ADDRESS 1</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="address11">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputemail" class=" control-label">ADDRESS 2</label>
                                                <input type="text" placeholder="Enter your Block..." id="inputemail"
                                                    class="form-control" name="address22">
                                            </div>


                                            <div class="form-group col-md-6" style="padding-left: 0px">
                                                <label for="inputpostcode" class=" control-label">PIN<span
                                                        class="color">*</span></label>
                                                <input type="text" placeholder="Enter your postcode..." id="inputpostcode"
                                                    class="form-control" name="postal_code1">
                                            </div>
                                        </div> -->
                                    </div>
                                        
                                
                                    <!-- </div> -->
                                    <!-- <div class="checkbox">
                                        <label><input type="checkbox" class="input-type"> Shipping address not same
                                            as the billing address</label>
                                    </div> -->
                                    <?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         $gift = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                // $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                // $prices = $tot_price + $prices;

                                                if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
                                                    $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                    $prices = $tot_price + $prices;
                                                    $gift = $cartitems[$i]['gift']+$gift;
                                                } else { 
                                                    $tot_price = 0;
                                                    $prices = $tot_price + $prices;
                                                    $gift = 0;
                                                 } 
                                                ?>
                                                    <?php }
                                                } ?>
                                    <input type="hidden" name="customer_id" value="<?php echo $customers['customer_id'];?>">
                                    
									<input type="hidden" name="community_discount_percentage" value="<?php echo $discount_value;?>" id="community_discount_percentage" >
									
									<input type="hidden" name="community_discount_percentage_original" value="<?php echo $discount_value;?>" id="community_discount_percentage_original" >
									
									<input type="hidden" name="community_discount_val" value="0" id="community_discount_val" >
									
                                         <input type="hidden" name="total_price" class="tot" id="tot" value="<?php echo $prices+$gift;?>">
                                        <!--  <script
                                src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_live_Q4wXI9mMI52eER" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
                                data-amount="<?php echo $this->input->post('total_price') * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
                                data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
                                data-id="<?php echo "ORDER".time();?>"//Replace with the order_id generated by you in the backend.
                                data-buttontext="Pay with Razorpay"
                                data-name="Yellow Mango"
                                data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                                data-image="<?=base_url();?>assets2/images/yellowmango_from_scratch/Logo/yellowmango.png"
                                data-prefill.name="<?php echo $customers['customer_name'];?>"
                                data-prefill.email="<?php echo $customers['email'];?>"
                                data-prefill.mobile="<?php echo $customers['mobile_number'];?>"
                                data-theme.color="#F37254"
                            ></script> -->
                            <!-- <div id="my-btns" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio"  checked > Pay Now
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" > Cash on Delivery
                                </label>
                            </div> -->
                            <div class="form-group col-md-12">
                                <h3 class="title-brand">PAYMENT OPTIONS</h3>
                            <!-- <label style="margin: 10px 0px">Payment Options</label> -->
                            <br/>
                            <div id=payondelivery>
                                <input type="radio" name="tab" value="Pay Now" onclick="show2();" required checked/>Pay Now
                                <input type="radio" name="tab" value="Pay On Delivery" onclick="show1();"  required/>Pay On Delivery
                            </div>
                            <div id="payondelivery1" style="display:none;">
                                <input type="radio" name="tab" value="Pay Now" onclick="show2();" required checked/>Pay Now
                            </div>
                            
                        </div>

                                    <div class="review-submit-btn">
                                        <button type="submit"
                                                class="form-control" style="text-align: center;" id="submit_btn">PLACE
                                                ORDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col-md-8 -->
                        <div class="">
                            <div class="col-md-12 col-lg-5 space-30 check-res">
                                <div class="right-side">
                                    <div class="box">
                                        <div class="box res-yourorder">
                                        <h3 class="title-brand">YOUR ORDER</h3>
                                        <div class="info-order">
                                            <div class="product-name">
                                                <ul>
                                                    <li class="head">
                                                        <span class="name">PRODUCTS NAME</span>
                                                        <span class="qty"><b>QTY</b></span>
                                                        <span class="total"><b>SUB TOTAL</b></span>
                                                    </li>
                                                <?php 
												if(count($cartitems) > 0) 
												{
                                                    for ($i=0; $i < count($cartitems); $i++) 
													{  ?>  
                                                    <?php if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity'])
													{
													
													?>
                                                    <li>
                                                        <span class="name"><?php echo $cartitems[$i]['product_name'];?></span>
                                                        <span class="qty"><?php echo $cartitems[$i]['quantity'];?></span>
                                                        <span class="total"><i style="padding-right: 5px" class="fa fa-inr"></i><?php echo $cartitems[$i]['quantity']*$cartitems[$i]['price'];?></span>
                                                    </li>
                                                 
                                                        <?php }
													} 
												} 
												?>
                                                   
                                                </ul>
                                            </div>
                                            <!-- End product-name -->
                                            <ul class="product-order">
                                                <li>
                                                    <span class="left">CART SUBTOTAL</span>
                                                    <span class="right">
                                                         <i class="fa fa-inr"></i> <?php 
												$tot_price = 0;
												$prices = 0;
												if(count($cartitems) > 0) 
												{
													for ($i=0; $i < count($cartitems); $i++) 
													{  
														if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
															$tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
															$prices = $tot_price + $prices;
														} 
														else 
														{ 
															$tot_price = 0;
															$prices = $tot_price + $prices;
														} 
													}
												} echo $prices;
											?>
										</span>
										
										<input type="hidden" id="sub_total_amount" value="<?php echo $prices;?>" name="sub_total_amount"/>
									</li>

									<?php 
									 $tot_price = 0;
									 $quantity = 0;
									 if(count($cartitems) > 0) {
										for ($i=0; $i < count($cartitems); $i++) {  
									
									if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
										// $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
										$quantity = $cartitems[$i]['quantity'] + $quantity;
									} else { 
										$tot_price = 0;
										$quantity = $tot_price + $quantity;
									 } 
									


									?>
										<?php }
									} ?>

									<!-- Show hidden -->
									<input type="hidden" name="quantity" class="quantity" id="quantity" value="<?php echo $quantity;?>">
										<!--	<?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         $gift = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                // $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                // $prices = $tot_price + $prices;

                                                if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
                                                    $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                    $prices = $tot_price + $prices;
                                                    $gift = $cartitems[$i]['gift']+$gift;
                                                } else { 
                                                    $tot_price = 0;
                                                    $prices = $tot_price + $prices;
                                                    $gift = 0;
                                                 } 
                                                }
                                             } 
											 echo $gift;?></span>-->
                                                
                                                <li>
                                                    <span class="left">SHIPPING & HANDLING</span>
                                                    <span class="right" id="shipping">BASED ON ADDRESS</span>
                                                    <!-- <span id="shipping"></span> -->
                                                </li>
												<span class="is_community_gated_div" style="display:none">
												<li>
                                                    <span class="left" style="width:300px;">Community Discount</span>
                                                    <span id="community_discount" ><?php echo $discount_value;?> %</span>
													<span class="right" id="community_discount_price">0</span>
                                                </li>
												</span>
                                                <li>
                                                    <span class="left">ORDER TOTAL</span>
                                                    <span class="right brand" id="totaldata"><i class="fa fa-inr"></i> <?php 
                                         $tot_price = 0;
                                         $prices = 0;
                                         $gift = 0;
                                         if(count($cartitems) > 0) {
                                                    for ($i=0; $i < count($cartitems); $i++) {  
                                                // $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                // $prices = $tot_price + $prices;

                                                if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
                                                    $tot_price = $cartitems[$i]['price']*$cartitems[$i]['quantity'];
                                                    $prices = $tot_price + $prices;
                                                    $gift = $cartitems[$i]['gift']+$gift;
                                                } else { 
                                                    $tot_price = 0;
                                                    $prices = $tot_price + $prices;
                                                    $gift = 0;
                                                 } 
                                                ?>
                                                    <?php }
                                                } ?>
                                    <?php echo $prices+$gift;?></span>
                                    <span class="right brand" id="totprice" style="display: none;"><i class="fa fa-inr"></i></span>
                                                </li>
												
												
                                            </ul>
                                        </div>

                                        <!-- End info-order -->
                                    </div>
                                        <!-- End info-order -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
        </div>

        <script type="text/javascript">
            $(function () {
        $("#chkPassport").click(function () {

        if ($(this).is(":checked")) {
            var large = '<div class="billing-add" id="templates4"><h3 class="title-brand">BILLING ADDRESS</h3><div class="form-group col-md-6"><label for="inputfname" class=" control-label">First Name <span class="color"></span></label><input type="text" placeholder="Enter your first name..." id="inputfname" class="form-control" name="customer_name1" required></div><div class="form-group col-md-6"><label for="inputlname" class=" control-label">Last Name <span class="color">*</span></label><input type="text" placeholder="Enter your last name..." id="inputlname" class="form-control" name="last_name1" required></div><div class="form-group col-md-6"><label for="inputlname" class=" control-label">Email <span class="color">*</span></label><input type="text" placeholder="Enter your Email..." id="email" class="form-control" name="email1" required></div><div class="form-group col-md-6"><label for="inputphone" class=" control-label">Phone<span class="color">*</span></label><input type="text" placeholder="Enter your phone..." id="inputphone" class="form-control" name="mobile_number1" required></div><div class="form-group col-md-6"><label for="inputemail" class=" control-label">ADDRESS 1 <span class="color">*</span></label><input type="text" placeholder="Enter your Address-1..." id="inputemail" class="form-control" name="address11" required></div><div class="form-group col-md-6"><label for="inputemail" class=" control-label">ADDRESS 2 <span class="color">*</span></label><input type="text" placeholder="Enter your Address-2..." id="inputemail" class="form-control" name="address22" required></div><div class="form-group col-md-6"> <label for="inputemail" class=" control-label">TOWN/MANDAL <span class="color">*</span></label><input type="text" placeholder="Enter your Town/Mandal..." id="inputemail" class="form-control" name="town_mandal1" required></div><div class="form-group col-md-6"><label for="inputemail" class=" control-label">CITY <span class="color">*</span></label> <input type="text" placeholder="Enter your City..." id="inputemail" class="form-control" name="city1" required></div><div class="form-group col-md-6"><label for="inputemail" class=" control-label">DISTRICT <span class="color">*</span></label><input type="text" placeholder="Enter your District..." id="inputemail" class="form-control" name="district1" required></div><div class="form-group col-md-6"><label for="inputemail" class=" control-label">STATE <span class="color">*</span></label><select class="form-control" name="state1" required><option value="">Select State</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Telangana">Telangana</option><option value="Tamilnadu">Tamilnadu</option><option value="Karnataka">Karnataka</option></select></div><div class="form-group col-md-6" style="padding-left: 0px"><label for="inputpostcode" class="control-label">PIN<span class="color">*</span></label><input type="text" placeholder="Enter your Pin..." class="pincode1 form-control zip1" name="postal_code1" required></div></div>';
            $('#dvPassport').append(large);

            // <input type="text" placeholder="Enter your Pincode..." class="pincode form-control zip" name="postal_code" maxlength="7" pattern="(\d{5}([\-]\d{4})?)" id="value1" required>
            // document.getElementById("templates4").style.display = "block";
                    $("#dvPassport").show();
                    $("#AddPassport").show();
                } else {
                    $("#templates4").remove();
                    $("#AddPassport").show();
                }
            });
        });
        </script>


        <script type="text/javascript">
  // A Validity State Polyfill
;(function (window, document, undefined) {

    'use strict';

    // Make sure that ValidityState is supported in full (all features)
    var supported = function () {
        var input = document.createElement('input');
        return ('validity' in input && 'badInput' in input.validity && 'patternMismatch' in input.validity && 'rangeOverflow' in input.validity && 'rangeUnderflow' in input.validity && 'stepMismatch' in input.validity && 'tooLong' in input.validity && 'tooShort' in input.validity && 'typeMismatch' in input.validity && 'valid' in input.validity && 'valueMissing' in input.validity);
    };

    /**
     * Generate the field validity object
     * @param  {Node]} field The field to validate
     * @return {Object}      The validity object
     */
    var getValidityState = function (field) {

        // Variables
        var type = field.getAttribute('type') || input.nodeName.toLowerCase();
        var isNum = type === 'number' || type === 'range';
        var length = field.value.length;
        var valid = true;

        // If radio group, get selected field
        if (field.type === 'radio' && field.name) {
            var group = document.getElementsByName(field.name);
            if (group.length > 0) {
                for (var i = 0; i < group.length; i++) {
                    if (group[i].form === field.form && field.checked) {
                        field = group[i];
                        break;
                    }
                }
            }
        }

        // Run validity checks
        var checkValidity = {
            badInput: (isNum && length > 0 && !/[-+]?[0-9]/.test(field.value)), // value of a number field is not a number
            patternMismatch: (field.hasAttribute('pattern') && length > 0 && new RegExp(field.getAttribute('pattern')).test(field.value) === false), // value does not conform to the pattern
            rangeOverflow: (field.hasAttribute('max') && isNum && field.value > 0 && Number(field.value) > Number(field.getAttribute('max'))), // value of a number field is higher than the max attribute
            rangeUnderflow: (field.hasAttribute('min') && isNum && field.value > 0 && Number(field.value) < Number(field.getAttribute('min'))), // value of a number field is lower than the min attribute
            stepMismatch: (isNum && ((field.hasAttribute('step') && field.getAttribute('step') !== 'any' && Number(field.value) % Number(field.getAttribute('step')) !== 0) || (!field.hasAttribute('step') && Number(field.value) % 1 !== 0))), // value of a number field does not conform to the stepattribute
            tooLong: (field.hasAttribute('maxLength') && field.getAttribute('maxLength') > 0 && length > parseInt(field.getAttribute('maxLength'), 10)), // the user has edited a too-long value in a field with maxlength
            tooShort: (field.hasAttribute('minLength') && field.getAttribute('minLength') > 0 && length > 0 && length < parseInt(field.getAttribute('minLength'), 10)), // the user has edited a too-short value in a field with minlength
            typeMismatch: (length > 0 && ((type === 'email' && !/^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/.test(field.value)) || (type === 'url' && !/^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*)(?::\d{2,5})?(?:[\/?#]\S*)?$/.test(field.value)))), // value of a email or URL field is not an email address or URL
            valueMissing: (field.hasAttribute('required') && (((type === 'checkbox' || type === 'radio') && !field.checked) || (type === 'select' && field.options[field.selectedIndex].value < 1) || (type !=='checkbox' && type !== 'radio' && type !=='select' && length < 1))) // required field without a value
        };

        // Check if any errors
        for (var key in checkValidity) {
            if (checkValidity.hasOwnProperty(key)) {
                // If there's an error, change valid value
                if (checkValidity[key]) {
                    valid = false;
                    break;
                }
            }
        }

        // Add valid property to validity object
        checkValidity.valid = valid;

        // Return object
        return checkValidity;

    };

    // If the full set of ValidityState features aren't supported, polyfill
    // if (!supported()) {
        Object.defineProperty(HTMLInputElement.prototype, 'validity', {
            get: function ValidityState() {
                return getValidityState(this);
            },
            configurable: true,
        });
    // }

})(window, document);


/*
 * classList.js: Cross-browser full element.classList implementation.
 * 1.1.20170427
 *
 * By Eli Grey, http://eligrey.com
 * License: Dedicated to the public domain.
 *   See https://github.com/eligrey/classList.js/blob/master/LICENSE.md
 */

/*global self, document, DOMException */

/*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js */

if ("document" in self) {

// Full polyfill for browsers with no classList support
// Including IE < Edge missing SVGElement.classList
if (!("classList" in document.createElement("_")) 
    || document.createElementNS && !("classList" in document.createElementNS("http://www.w3.org/2000/svg","g"))) {

(function (view) {

"use strict";

if (!('Element' in view)) return;

var
      classListProp = "classList"
    , protoProp = "prototype"
    , elemCtrProto = view.Element[protoProp]
    , objCtr = Object
    , strTrim = String[protoProp].trim || function () {
        return this.replace(/^\s+|\s+$/g, "");
    }
    , arrIndexOf = Array[protoProp].indexOf || function (item) {
        var
              i = 0
            , len = this.length
        ;
        for (; i < len; i++) {
            if (i in this && this[i] === item) {
                return i;
            }
        }
        return -1;
    }
    // Vendors: please allow content code to instantiate DOMExceptions
    , DOMEx = function (type, message) {
        this.name = type;
        this.code = DOMException[type];
        this.message = message;
    }
    , checkTokenAndGetIndex = function (classList, token) {
        if (token === "") {
            throw new DOMEx(
                  "SYNTAX_ERR"
                , "An invalid or illegal string was specified"
            );
        }
        if (/\s/.test(token)) {
            throw new DOMEx(
                  "INVALID_CHARACTER_ERR"
                , "String contains an invalid character"
            );
        }
        return arrIndexOf.call(classList, token);
    }
    , ClassList = function (elem) {
        var
              trimmedClasses = strTrim.call(elem.getAttribute("class") || "")
            , classes = trimmedClasses ? trimmedClasses.split(/\s+/) : []
            , i = 0
            , len = classes.length
        ;
        for (; i < len; i++) {
            this.push(classes[i]);
        }
        this._updateClassName = function () {
            elem.setAttribute("class", this.toString());
        };
    }
    , classListProto = ClassList[protoProp] = []
    , classListGetter = function () {
        return new ClassList(this);
    }
;
// Most DOMException implementations don't allow calling DOMException's toString()
// on non-DOMExceptions. Error's toString() is sufficient here.
DOMEx[protoProp] = Error[protoProp];
classListProto.item = function (i) {
    return this[i] || null;
};
classListProto.contains = function (token) {
    token += "";
    return checkTokenAndGetIndex(this, token) !== -1;
};
classListProto.add = function () {
    var
          tokens = arguments
        , i = 0
        , l = tokens.length
        , token
        , updated = false
    ;
    do {
        token = tokens[i] + "";
        if (checkTokenAndGetIndex(this, token) === -1) {
            this.push(token);
            updated = true;
        }
    }
    while (++i < l);

    if (updated) {
        this._updateClassName();
    }
};
classListProto.remove = function () {
    var
          tokens = arguments
        , i = 0
        , l = tokens.length
        , token
        , updated = false
        , index
    ;
    do {
        token = tokens[i] + "";
        index = checkTokenAndGetIndex(this, token);
        while (index !== -1) {
            this.splice(index, 1);
            updated = true;
            index = checkTokenAndGetIndex(this, token);
        }
    }
    while (++i < l);

    if (updated) {
        this._updateClassName();
    }
};
classListProto.toggle = function (token, force) {
    token += "";

    var
          result = this.contains(token)
        , method = result ?
            force !== true && "remove"
        :
            force !== false && "add"
    ;

    if (method) {
        this[method](token);
    }

    if (force === true || force === false) {
        return force;
    } else {
        return !result;
    }
};
classListProto.toString = function () {
    return this.join(" ");
};

if (objCtr.defineProperty) {
    var classListPropDesc = {
          get: classListGetter
        , enumerable: true
        , configurable: true
    };
    try {
        objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
    } catch (ex) { // IE 8 doesn't support enumerable:true
        // adding undefined to fight this issue https://github.com/eligrey/classList.js/issues/36
        // modernie IE8-MSW7 machine has IE8 8.0.6001.18702 and is affected
        if (ex.number === undefined || ex.number === -0x7FF5EC54) {
            classListPropDesc.enumerable = false;
            objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
        }
    }
} else if (objCtr[protoProp].__defineGetter__) {
    elemCtrProto.__defineGetter__(classListProp, classListGetter);
}

}(self));

}

// There is full or partial native classList support, so just check if we need
// to normalize the add/remove and toggle APIs.

(function () {
    "use strict";

    var testElement = document.createElement("_");

    testElement.classList.add("c1", "c2");

    // Polyfill for IE 10/11 and Firefox <26, where classList.add and
    // classList.remove exist but support only one argument at a time.
    if (!testElement.classList.contains("c2")) {
        var createMethod = function(method) {
            var original = DOMTokenList.prototype[method];

            DOMTokenList.prototype[method] = function(token) {
                var i, len = arguments.length;

                for (i = 0; i < len; i++) {
                    token = arguments[i];
                    original.call(this, token);
                }
            };
        };
        createMethod('add');
        createMethod('remove');
    }

    testElement.classList.toggle("c3", false);

    // Polyfill for IE 10 and Firefox <24, where classList.toggle does not
    // support the second argument.
    if (testElement.classList.contains("c3")) {
        var _toggle = DOMTokenList.prototype.toggle;

        DOMTokenList.prototype.toggle = function(token, force) {
            if (1 in arguments && !this.contains(token) === !force) {
                return force;
            } else {
                return _toggle.call(this, token);
            }
        };

    }

    testElement = null;
}());

}


// Add the novalidate attribute when the JS loads
var forms = document.querySelectorAll('.validate');
for (var i = 0; i < forms.length; i++) {
    forms[i].setAttribute('novalidate', true);
}


// Validate the field
var hasError = function (field) {

    // Don't validate submits, buttons, file and reset inputs, and disabled fields
    if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

    // Get validity
    var validity = field.validity;

    // If valid, return null
    if (validity.valid) return;

    // If field is required and empty
    if (validity.valueMissing) return 'Please fill out this field.';

    // If not the right type
    if (validity.typeMismatch) {

        // Email
        if (field.type === 'email') return 'Please enter an email address.';

        // URL
        if (field.type === 'url') return 'Please enter a URL.';

    }

    // If too short
    if (validity.tooShort) return 'Please lengthen this text to ' + field.getAttribute('minLength') + ' characters or more. You are currently using ' + field.value.length + ' characters.';

    // If too long
    if (validity.tooLong) return 'Please shorten this text to no more than ' + field.getAttribute('maxLength') + ' characters. You are currently using ' + field.value.length + ' characters.';

    // If pattern doesn't match
    if (validity.patternMismatch) {

        // If pattern info is included, return custom error
        if (field.hasAttribute('title')) return field.getAttribute('title');

        // Otherwise, generic error
        return 'Please match the requested format.';

    }

    // If number input isn't a number
    if (validity.badInput) return 'Please enter a number.';

    // If a number value doesn't match the step interval
    if (validity.stepMismatch) return 'Please select a valid value.';

    // If a number field is over the max
    if (validity.rangeOverflow) return 'Please select a value that is no more than ' + field.getAttribute('max') + '.';

    // If a number field is below the min
    if (validity.rangeUnderflow) return 'Please select a value that is no less than ' + field.getAttribute('min') + '.';

    // If all else fails, return a generic catchall error
    return 'The value you entered for this field is invalid.';

};


// Show an error message
var showError = function (field, error) {

    // Add error class to field
    field.classList.add('error');
  
    // If the field is a radio button and part of a group, error all and get the last item in the group
    if (field.type === 'radio' && field.name) {
        var group = field.form.querySelectorAll('[name="' + field.name + '"]');
        if (group.length > 0) {
            for (var i = 0; i < group.length; i++) {
                group[i].classList.add('error');
            }
            field = group[group.length - 1];
        }
    }

    // Get field id or name
    var id = field.id || field.name;
    if (!id) return;

    // Check if error message field already exists
    // If not, create one
    var message = field.form.querySelector('.error-message#error-for-' + id );
    if (!message) {
        message = document.createElement('div');
        message.className = 'error-message';
        message.id = 'error-for-' + id;
        
        // If the field is a radio button or checkbox, insert error after the label
        var label;
        if (field.type === 'radio' || field.type ==='checkbox') {
            label = field.form.querySelector('label[for="' + id + '"]') || field.parentNode;
            if (label) {
                label.parentNode.insertBefore( message, label.nextSibling );
            }
        }

        // Otherwise, insert it after the field
        if (!label) {
            field.parentNode.insertBefore( message, field.nextSibling );
        }

    }
    
    // Add ARIA role to the field
    field.setAttribute('aria-describedby', 'error-for-' + id);

    // Update error message
    message.innerHTML = error;

    // Show error message
    message.style.display = 'block';
    message.style.visibility = 'visible';

};


// Remove the error message
var removeError = function (field) {

    // Remove error class to field
    field.classList.remove('error');
    
    // Remove ARIA role from the field
    field.removeAttribute('aria-describedby');

    // If the field is a radio button and part of a group, remove error from all and get the last item in the group
    if (field.type === 'radio' && field.name) {
        var group = field.form.querySelectorAll('[name="' + field.name + '"]');
        if (group.length > 0) {
            for (var i = 0; i < group.length; i++) {
                group[i].classList.remove('error');
            }
            field = group[group.length - 1];
        }
    }

    // Get field id or name
    var id = field.id || field.name;
    if (!id) return;
    

    // Check if an error message is in the DOM
    var message = field.form.querySelector('.error-message#error-for-' + id + '');
    if (!message) return;

    // If so, hide it
    message.innerHTML = '';
    message.style.display = 'none';
    message.style.visibility = 'hidden';

};


// Listen to all blur events
document.addEventListener('blur', function (event) {

    // Only run if the field is in a form to be validated
    if (!event.target.form.classList.contains('validate')) return;

    // Validate the field
    var error = hasError(event.target);
  
    // If there's an error, show it
    if (error) {
        showError(event.target, error);
        return;
    }

    // Otherwise, remove any existing error message
    removeError(event.target);

}, true);


// Check all fields on submit
document.addEventListener('submit', function (event) {

    // Only run on forms flagged for validation
    if (!event.target.classList.contains('validate')) return;

    // Get all of the form elements
    var fields = event.target.elements;

    // Validate each field
    // Store the first field with an error to a variable so we can bring it into focus later
    var error, hasErrors;
    for (var i = 0; i < fields.length; i++) {
        error = hasError(fields[i]);
        if (error) {
            showError(fields[i], error);
            if (!hasErrors) {
                hasErrors = fields[i];
            }
        }
    }

    // If there are errrors, don't submit form and focus on first element with error
    if (hasErrors) {
        event.preventDefault();
        hasErrors.focus();
    }

    // Otherwise, let the form submit normally
    // You could also bolt in an Ajax form submit process here

}, false);
</script>

<script type="text/javascript">
// ZIP Code
Array.from(document.getElementsByClassName('zip')).forEach(e => {
  e.addEventListener('input', function() {
    this.value = this.value.replace(/[^\d]/g, '')
      .replace(/(\d{4})(\d{2})/, '$1-$2');
  });
  e.addEventListener('keydown', e => {
    e = window.event || e;
    let key = e.keyCode;
    key == 32 ? e.preventDefault() : true;
  });
})
</script>

<script type="text/javascript">
// ZIP Code
Array.from(document.getElementsByClassName('zip1')).forEach(e => {
  e.addEventListener('input', function() {
    this.value = this.value.replace(/[^\d]/g, '')
      .replace(/(\d{4})(\d{2})/, '$1-$2');
  });
  e.addEventListener('keydown', e => {
    e = window.event || e;
    let key = e.keyCode;
    key == 32 ? e.preventDefault() : true;
  });
})
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function(){
            $('#value1').keyup(function(){
               var value1 = parseFloat($('#value1').val());
               $('#selected_pincode').val(value1);
            });
         });
</script>

<script type="text/javascript">
    $(function(){
            $('#value2').keyup(function(){
               var value2 = parseFloat($('#value2').val());
               $('#selected_pincode').val(value2);
            });
         });
</script>


 <script type="text/javascript">
    $(document).ready(function () {
      $('.pincode,.pincode1').keyup(function()
	  {
            var quantity = $('#quantity').val();
			var cart_sub_total = parseFloat($("#sub_total_amount").val());
            var pincode = $('#selected_pincode').val();
           
            var url = baseurl + "home/getPincodePricevalue";
            $.ajax({
                type: 'POST',
                url: url,
                data:{"pincode": pincode},
                dataType: 'json',
                success: function (result) 
				{
					
                   if(result['res'] == "pass")
				   {
				       if(result['payondelivery'] == 0) {
						        $('#payondelivery').hide();
						        $('#payondelivery1').show();
						    }else {
						      //  $('#payondelivery').remove();
						    }
						if(result['price'] == 0) 
						{
						    
							$('#shipping_price').val(0);
							$('#shipping').html("BASED ON ADDRESS");
						}
						else 
						{
						    if(result['payondelivery'] == 0) {
						         $('#payondelivery').hide();
						        $('#payondelivery1').show();
						    }else {
						      //  $('#payondelivery').remove();
						    }
							//var shipping_charges = parseFloat(result['record']['price'])*quantity;
							var shipping_charges = parseFloat(result['record']['price'])*cart_sub_total/100;
							
							if(quantity>=6)
							{
								$('#shipping_price').val(0);
								$('#shipping').html("BASED ON ADDRESS");
							}
							else
							{
								$('#shipping_price').val(shipping_charges);
								$('#shipping').html(shipping_charges); 
							}
							
						}
						$("#pincode_msg").html("");
						$("#submit_btn").removeAttr("disabled");
						recalculateTotal();
                   }
				   else
				   {
					 $('#shipping_price').val(0);
					 $('#shipping').html("BASED ON ADDRESS");
					 $('#selected_pincode').val('');
					 
                     $("#pincode_msg").html("Shipping is not available for this Address.");
					 $("#submit_btn").attr("disabled","disabled");
					 
					 recalculateTotal();
                   }
                }
            });

        });
});
</script>


<script type="text/javascript">
 

$("#cityChange").on("change",function()
{
	var v = $(this).val();
	$.ajax({
		type: 'POST',
		url: baseurl + "home/getCommunityCity",
		data:{'city_name':v},
		dataType: 'json',
		success: function (result) 
		{	
			if(result.status!=0)
			{
				var l = result.record.length;
				
				var content ="<option value='' style='display:none' selected>Select Appartment</option>";
				for(var i=0;i<l;i++)
				{
					content+='<option value="'+result.record[i].community_id+'-'+result.record[i].appartment+'">'+result.record[i].appartment+'</option>';
				}

				$("#appartment1").html(content);
			}
			else
			{
				alert("Sorry! We have no appartment in this city yet");
				return false;
			}
			
			recalculateTotal();
		}
	});	
	
});


$("#appartment1").on("change",function()
{
	var v = $(this).val();
	$.ajax({
		type: 'POST',
		url: baseurl + "home/getCommunityDiscount",
		data:{'community_id':v},
		dataType: 'json',
		success: function (result) 
		{	
			
			if(result.status!=0)
			{
				var dis = result.record.discount;
				$("#consignment_date").val(result.record.consignment_date);
				$("#community_discount").html(dis+"%");
				$("#community_discount_percentage").val(dis);
				$("#community_discount_percentage_original").val(dis);
				$("#community_discount_price").html(dis);
				
				var cart_sub_total = parseFloat($("#sub_total_amount").val());
				var community_discount = parseFloat($("#community_discount_percentage").val());
				
				var discount_value  = parseFloat(cart_sub_total)*parseFloat(community_discount)/100;
				
				$("#community_discount_price").html(discount_value);
				
			}
			else
			{
				$("#consignment_date").val("");
				$("#community_discount").html(0+"%");
				$("#community_discount_percentage").val(0);
				$("#community_discount_price").html(0);
				
			}
			
			recalculateTotal();
		}
	});	
	
});


function recalculateTotal()
{
	var cart_sub_total = parseFloat($("#sub_total_amount").val());
	var shipping_price = parseFloat($('#shipping_price').val());
	//var community_discount = parseFloat($("#community_discount_percentage").val());
	
	if($("#is_gated_community").is(':checked'))
	{
		
		var community_discount = parseFloat($("#community_discount_percentage_original").val());
	
		var discount_value  = parseFloat(cart_sub_total)*parseFloat(community_discount)/100;
	}
	else
	{
		
		var discount_value  = 0;
	}
	
	
	var total = cart_sub_total + shipping_price - discount_value;
	
	
	$("#community_discount_val").val(discount_value);
	
	console.log("cart_sub_total - "+cart_sub_total);
	console.log("shipping_price - "+shipping_price);
	console.log("community_discount - "+community_discount);
	console.log("discount_value - "+discount_value);
	console.log("total - "+total);
	
	$('#totaldata').hide();
	$('#totprice').show();
	
	$("#tot").val(total);
	$('#totprice').html('<i class="fa fa-inr"></i>'+total);

}



$("#is_gated_community").on("change",function()
{
	if($(this).is(':checked'))
	{
		$(".is_community_gated_div").css("display","block");
		$(".not_gated_community").css("display","none");
		
		
		$("#cityChange").attr("required",true);
		$("#appartment1").attr("required",true);
		$("#appartment1").attr("required",true);
		$("#block-input").attr("required",true);
		$("#flat-input").attr("required",true);
		$("#consignment_date").attr("required",true);
		$("#add1").removeAttr("required");
		$("#add2").removeAttr("required");
		$("#town1").removeAttr("required");
		$("#district1").removeAttr("required");
		$("#state1").removeAttr("required");
		
		
		var cart_sub_total = parseFloat($("#sub_total_amount").val());
		var community_discount = parseFloat($("#community_discount_percentage_original").val());
		
		$("#community_discount").html(community_discount+"%");
		
		var discount_value  = parseFloat(cart_sub_total)*parseFloat(community_discount)/100;
		
		$("#community_discount_price").html(discount_value);
		
		recalculateTotal();
		
	}
	else
	{	
		$(".is_community_gated_div").css("display","none");
		$("#community_discount_val").val(0);
		$("#community_discount_percentage").val(0);
		$("#community_discount").html(0+"%");
		$("#community_discount_price").html(0+"%");
		
		$(".not_gated_community").css("display","block");
		
		$('#cityChange').prop('selectedIndex',0);
		$('#appartment1').prop('selectedIndex',0);
		
		$("#cityChange").removeAttr("required");
		$("#appartment1").removeAttr("required");
		$("#appartment1").removeAttr("required");
		$("#block-input").removeAttr("required");
		$("#flat-input").removeAttr("required");
		$("#consignment_date").removeAttr("required");
		$("#add1").attr("required",true);
		$("#add2").attr("required",true);
		$("#town1").attr("required",true);
		$("#district1").attr("required",true);
		$("#state1").attr("required",true);
		
		recalculateTotal();
	}		
});

</script>
