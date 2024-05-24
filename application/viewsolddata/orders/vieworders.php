<style type="text/css">

    fieldset 

    {

        border: 1px solid #b66dff !important;

        padding: 2px;

        margin: 0;

        xmin-width: 0;

        padding: 10px;       

        position: relative;

        border-radius:4px;

        background:none;

        padding-left:10px!important;

        margin-bottom: 10px;

    }   

        

    legend

    {

        font-size:14px;

        font-weight:bold;

        margin-bottom: 0px; 

        width: 25%; 

        border: 1px solid #ddd;

        border-radius: 4px; 

        padding: 5px 5px 5px 10px; 

        background-color: #b66dff;

        color:#ffffff;

    }

</style>



<?php echo validation_errors();?>

                    <?php if($this->session->flashdata('error_msg')){   

                      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  

                    }?>

                    <?php if($this->session->flashdata('success_msg')){   

                      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  

                    }?>



<section class="content">

    <div class="col-12 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

    <div class="row">

        <div class="col-xs-12">

            <div class="box">

                <div class="box-header">

                    <span><a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>

                    <h3 class="box-title" style="margin-left: 50px; margin-top: -30px;">View Order Details</h3>

                </div>

                <div class="box-body" style="margin-top: 30px;">

                    

                    

                                <fieldset>

                                <legend>Order Details</legend>

                                <table class="table table-bordered">

                                    <tr>

                                        
                                        <td><b>Customer Name:</b> </td><td colspan="3">
                                            <?php if($orders['customer_name1'] == ''){
                                      echo $orders['customer_name']." ".$orders['last_name'];
                                        } else { 
                                          echo $orders['customer_name1']." ".$orders['last_name1'];
                                        } ?>
                                           </td>

                                        <td><b>Mobile Number:</b> </td><td colspan="3"> <?php if($orders['mobile_number1'] == ''){
                                      echo $orders['mobile_number'];
                                        } else { 
                                          echo $orders['mobile_number1'];
                                        } ?></td>

                                        <td><b>Email:</b> </td><td colspan="3"><?php if($orders['email1'] == ''){
                                      echo $orders['email'];
                                        } else { 
                                          echo $orders['email1'];
                                        } ?></td>

                                    </tr>

                                    <tr>

                                        <td><b>Address </b></td><td colspan="3"> 
										<?php 
										
										$is_gated_community = $orders['is_gated_community'];
			  
										  if( $is_gated_community == "1")
										  {
											$name =   $orders['customer_name1']." ".$orders['last_name1'];
				
											$flat_no =  $orders['flat_no'];
											$block_no = $orders['block'];
											$appartment = $orders['appartment'];
											
											$city =   $orders['city1']; 
											$pin =   $orders['postal_code1'];
											$phone = $orders['mobile_number1'];
											$email = $orders['email1'];
											
											$content = '<li style="list-style-type: none;">'.$name.'</li>';
											$content .= '<li style="list-style-type: none;">'.$flat_no.', '.$block_no.' </li>';
											$content .= '<li style="list-style-type: none;">'.$appartment.' </li>';
											$content .= '<li style="list-style-type: none;">'.$city.' </li>';
											$content .= '<li style="list-style-type: none;">'.$pin.' </li>';
											$content .= '<li style="list-style-type: none;">Phone: '.$phone.' </li>';
											$content .= '<li style="list-style-type: none;">Email: '.$email.' </li>';

										  }
										  else
										  {
											$name =   $orders['customer_name1']." ".$orders['last_name1'];
											
											$town =   $orders['town_mandal1'];
											$address1 = $orders['address11'];
											$address2 =  $orders['address22'];
											
											$pin =   $orders['postal_code1'];
											$phone = $orders['mobile_number1'];
											$email = $orders['email1'];
											
											$content = '<li style="list-style-type: none;">'.$name.'</li>';
											$content .= '<li style="list-style-type: none;">'.$town.' </li>';
											$content .= '<li style="list-style-type: none;">'.$address1.' </li>';
											$content .= '<li style="list-style-type: none;">'.$address2.' </li>';
											$content .= '<li style="list-style-type: none;">'.$pin.' </li>';
											$content .= '<li style="list-style-type: none;">Phone: '.$phone.' </li>';
											$content .= '<li style="list-style-type: none;">Email: '.$email.' </li>';
										  }
										?>
										<ul class="data1" style="list-style-type: none;padding: 0px">
											<?php echo $content;?>
										</ul>
										</td>

                                        <td><b>Order Id </b></td><td colspan="3"><?php echo $orders['order_txn'];?></td>

                                        <td><b>Total Price </b></td><td colspan="3">₹<?php echo $orders['total_price'];?></td>

                                    </tr>

                                   <!--  <tr>

                                        <td><b>Email: </b></td><td colspan="3"><?php echo $users['email'];?></td>

                                        <td><b>Phone Number: </b></td><td colspan="3"><?php echo $users['phone_number'];?></td>

                                    </tr>

                                     <tr>

                                        <td><b>Class: </b></td><td colspan="3"><?php echo $users['class'];?></td>

                                    </tr> -->

                                </table>

                                </fieldset>



                            <fieldset>

                                <legend>Products</legend>



                                <table class="table">

                                    <th>S.no</th>

                                    <th>Product Image</th>

                                    <th>Product Name</th>

                                    <th>Quantity</th>

                                    <th>Price</th>

                                    <th>Total Price</th>

                                    <tbody>

                                        <?php if($cartitems->num_rows() > 0) { 

                                            foreach ($cartitems->result() as $key => $crt) { ?>

                                        <tr>

                                            <td>

                                                <a href="" class="btn btn-xs" style="color: green;"><?php echo $key+1;?></a>

                                            </td>

                                            <td><img src="<?php echo $crt->product_image;?>" height="40" width="40"></td>

                                            <td><?php echo $crt->product_name;?></td>

                                            <td><?php echo $crt->quantity;?></td>

                                            <td>₹<?php echo $crt->price;?></td>

                                            <td>₹<?php echo $crt->quantity*$crt->price?></td>

                                        </tr>



                                        <?php }

                                    } ?>

                                            

                                        </tbody>

                                    </table>

                    </fieldset>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</section>





<script type="text/javascript">

    function deleteItem() {

    if (confirm("Are you sure you want to remove ?")) {

        return true;

    }

    return false;

}

</script>



<style type="text/css">

  .multiselect {

  width: 200px;

}



.selectBox {

  position: relative;

}



.selectBox select {

  width: 100%;

  font-weight: bold;

}



.overSelect {

  position: absolute;

  left: 0;

  right: 0;

  top: 0;

  bottom: 0;

}



#checkboxes {

  display: none;

  border: 1px #dadada solid;

}



#checkboxes label {

  display: block;

}



#checkboxes label:hover {

  background-color: #1e90ff;

}

</style>



<script type="text/javascript">

  var expanded = false;



function showCheckboxes() {

  var checkboxes = document.getElementById("checkboxes");

  if (!expanded) {

    checkboxes.style.display = "block";

    expanded = true;

  } else {

    checkboxes.style.display = "none";

    expanded = false;

  }

}

</script>



