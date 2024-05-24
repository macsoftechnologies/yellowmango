 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    
<style>
.custom-select
{
	width:50px !important;
	color:#000 !important;
}
  .Invoice-logo {
    display: flex;
  }

  .table-main tr th {
    background-color: #96588b;
    color: #fff;
  }

  .data1 {
    padding: 0px !important;
  }

  .order-table th {
    background-color: #000 !important;
    color: #fff !important;
  }
/* body {
  padding: 1rem 1rem;
}*/
.btn {
  color: white !important;
  cursor: pointer;
}
.dropdown-menu {
  text-align: center;
  cursor: pointer;
}
.dropdown-menu > li:hover {
  background: #ccc;
}
.sidebar {
/*	height: 100%;*/
    margin-top: 55px;
}
     .content-wrapper {
    padding: 4.75rem 0 !important;
}

@media (min-width: 360px) and (max-width: 480px) {
	.alert {
        padding: 1.75rem 1.25rem;
       }
       .btn.btn-xs {
       	font-size: 14px;
       	padding: 15px;
       	width: 100%;
       }
       .card .card-title {
        text-align: center;
        text-transform: uppercase;
        font-size: 20px;
       }
       .card .card-body {
        padding: 15px;
       }
       .btn.btn-sm, .btn-group-sm > .btn {
       	font-size: 20px;
       	margin-left: 35%;
       }
            .content-wrapper {
    padding: 4.75rem 0 !important;
}

}





@media only screen and (min-width: 800px) {
  #action-button-more {
    display: none;
  }
  .special {
    display: inline-block !important;
  }
}
@media only screen and (max-width: 800px) {
  #action-button-more {
    width: 80px;
    display: inline-block;
  }
  .special{
    display: none;
    border-radius: 0;
  }
  .show-el, .drop {
    background: rgba(0, 123, 255, 0.7);
    color: #333;
    border: none;
    width: 110px;
  }
  .show-el {
    margin-left: 51px;
  }
  .drop {
    border-radius: 0 !important;
  }
  #action-button-order {
    border-bottom-left-radius: 4px !important;
    border-bottom-right-radius: 4px !important;
  }
  #action-button-export {
    border-top-left-radius: 4px !important;
    border-top-right-radius: 4px !important;
  }
}
.show-el {
  display: block;
}


</style>

<?php echo validation_errors();?>

    <?php if($this->session->flashdata('error_msg')){   

      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  

    }?>

    <?php if($this->session->flashdata('success_msg')){   

      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  

    }?>

<style type="text/css">
      .number {
        display: flex; align-items: center;justify-content: flex-end;padding: 0px;
      }
</style>


        <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">

              <div class="card-body">

                <h4 class="card-title">Orders Details</h4>

                <p class="card-description"> 
					<a href="javascript:null(0)" class="btn btn-danger btn-xs" onclick="downloadOrderExcel()" > Download Order Excel </a> &nbsp <a href="javascript:null(0)" class="btn btn-danger btn-xs" onclick="downloadProductExcel()"> Download Product Excel </a> &nbsp 
					<a href="javascript:null(0)" class="btn btn-success btn-xs" onclick="downloadOrderPDF()"> Download Order Pdf </a> &nbsp <a href="javascript:null(0)" class="btn btn-success btn-xs" onclick="downloadProductPDF()"> Download Product Pdf </a>
					<br/>

                </p> 
				
				
                <form action="<?=base_url()?>orders/search" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                      <div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<label class="radio-inline">
								  
								<?php 
								if($gated_community_type=="gated")
								{
									echo'<input type="radio" name="gated_community_type" checked id="gated_community_radio" value="gated" > Gated Community';
								}
								else
								{
									echo'<input type="radio" name="gated_community_type" id="gated_community_radio" value="gated" > Gated Community';
								}
								?>
								</label>
								&nbsp &nbsp &nbsp 
								<label class="radio-inline">
								<?php 
								if($gated_community_type=="non-gated")
								{
									echo'<input type="radio" name="gated_community_type" id="non_gated_community_radio" checked value="non-gated"> Non Gated Community';
								}
								else
								{
									echo'<input type="radio" name="gated_community_type" id="non_gated_community_radio" value="non-gated"> Non Gated Community';
								}
								?>
								</label>
								
							</div>
						</div><br/>
								<div class="row">

								  <div class="col-md-3">
									<div class="form-group">
									  <label for="exampleInputEmail3">From:</label>
										<input type="date" name="from_date" id="datepicker" class="form-control" placeholder="MM/DD/YYYY" value="<?php echo $from_date;?>">
									</div>
								  </div>

								  <div class="col-md-3">
									<div class="form-group">
									  <label for="exampleInputEmail3">To:</label>
										<input type="date" name="to_date" id="datepicker2" class="form-control" placeholder="MM/DD/YYYY" value="<?php echo $to_date;?>">
									</div>
								  </div>

								  <div class="col-md-3">
									<div class="form-group">
									  <label for="exampleInputEmail3">status</label>
										 <select class="form-control" name="status" id="status">
										  <option value="">Select Status</option>
											<option value="1" <?php echo ($status==1) ? "selected" : "" ;?>>Ordered</option>
											<option value="2" <?php echo ($status==2) ? "selected" : "" ;?>>Processing</option>
											<option value="3" <?php echo ($status==3) ? "selected" : "" ;?>>Shipped</option>
											<option value="4" <?php echo ($status==4) ? "selected" : "" ;?>>Delevered</option>
											<option value="5" <?php echo ($status==5) ? "selected" : "" ;?>>Cancel</option>
										</select>
									</div>
								  </div>
								  
								  <div class="col-md-3">
									<div class="form-group">
									  <label for="postal_code1">Pincode:</label>
										<input type="text" name="postal_code1" id="postal_code1" class="form-control" placeholder="Pincode" value="<?php echo $postal_code1;?>">
									</div>
								  </div>

								 <?php 
								 
								 
								 if($gated_community_type=="gated")
								 {
									echo "<div class='row' id='is_gated_community_div' style='display:contents' >";
								 }
								 else
								 {
									 echo "<div class='row' style='display:none' id='is_gated_community_div'>";
								 }
								 ?>
								  <div class="col-md-4">
									<div class="form-group">
									  <label for="exampleInputEmail3">City:</label>
										 <select class="form-control" name="city" id="cityChange">
											
											<?php 
											if($city!="")
											{
												echo "<option value='".$city."' selected style='display:none'>".$city."</option>";
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
									
								  </div>
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Appartment:</label>
										<select class="form-control" name="appartment" id="appartment1">
											<?php 
											if($appartment!="")
											{
												echo "<option value='".$community_id."-".$appartment."' selected style='display:none'>".$appartment."</option>";
											}
											else
											{
												echo '<option value="">Select Appartment </option>';
											}
											?>
											<option value="">Select Appartment </option>
										</select>
										
									</div>
								  </div>
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Consignment Date:</label>
										<input type="date" name="consignment_date" class="form-control" placeholder="MM/DD/YYYY" id="consignment_date" value="<?php echo $consignment_date;?>">
									</div>
								  </div>
								</div>

								</div>
							  </div>

                      
								<button type="submit" class="btn btn-gradient-info btn-sm mr-2">Search</button>
                    </form>

                <div class="content container-fluid">

                  <!--<div class="form-group col-md-12 number">  <label style="margin-right: 20px;">Show Numbers Of Rows</label>      
                  <select class  ="form-control" name="state" id="maxRows" style="width: 100px">
                     <option value="">Show ALL Rows</option>
                   
                     <option value="20">20</option>
                     <option value="50">50</option>
                     <option value="70">70</option>
                     <option value="100">100</option>
                    </select>
          
                  </div> -->

                    <div class="table-full-width" id="table-id" style="width: 100%;overflow-x: scroll; margin-top:50px;">

                        <table class="table" id="or-table">
							<thead>
							<tr>
								<th>S.no</th>

								<th>Order On</th>

								<th>Name</th>

								<th>Phone</th>
								<th>Pincode</th>
								<?php 
								if($gated_community_type=="gated")
								{
								?>
								<th>City</th>
								<th>Apt.</th>
								<th>Consignment Date</th>
								<?php 
								}
								?>
								<th>Order Id</th>

								<th>T.Price</th>

								<th>Type</th>

								<th>Status</th>

								<!-- <th>Delivery Date</th> -->

								 <th>Actions</th> 
								</tr>
							</thead>
                            <tbody>

                                <?php if($orders->num_rows() > 0) { 

                                    foreach ($orders->result() as $key => $or) { ?>

									<tr>

                                    <td><span class="btn btn-success btn-xs"><?php echo $key+1;?></span></td>

                                    <td><?php echo date('d-m-Y ',strtotime($or->created_at));?></td>

                                    <td><?php echo $or->customer_name1." ".$or->last_name1;?></td>

                                    <td><?php echo $or->mobile_number1;?></td>
                                    <td><?php echo $or->postal_code1;?></td>
									<?php 
									if($gated_community_type=="gated")
									{
									?>
                                    <td><?php echo $or->city;?></td>
                                    <td><?php echo $or->appartment;?></td>
                                    <td><?php echo $or->consignment_date;?></td>
									<?php 
									}
									?>
                                    <td><a href="<?=base_url();?>orders/vieworderDetails/<?php echo $or->order_id;?>" class="btn btn-gradient-danger btn-xs"><?php echo $or->order_txn;?></a></td>

                                    <td>₹<?php echo $or->total_price;?></td>
                                    
                                    <td><?php echo ($or->tab =="Pay") ? "Paid" : $or->tab;?></td>
                                    <td style="display: flex;">
                                      
                                     
                                        <?php if($or->status == 1) {?>
                                          <div style="display: flex;">
                                              <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>" style="height: 30px; width: 100px;">
                                                <option value="1">Ordered</option>
                                                <option value="2">Processing</option>
                                                <option value="3">Shipped</option>
                                                <option value="4">Delevered</option>
                                                <option value="5">Cancel</option>
                                            </select>
                                            <button id="status_<?php echo $or->order_id;?>" class="btn btn-xs" style="display: none; margin-left: 10px; width: 75px;"></button>

                                            <a href="#" class="btn btn-xs" id="orderstatus_<?php echo $or->order_id;?>" style="background-color: #1ccee5; color: white; margin-left: 10px; width: 75px;  height: 30px;">Ordered</a>

                                            <div>
                                                <button type="button" class="btn btn-gradient-info btn-xs dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; margin-left: 10px;">Print<span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a  href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Invoice</a></li>
                                                    <li><a href="javascript:printDiv('print-address-<?php echo $key+1;?>');">Slip Address</a></li> 
                                                </ul>
                                            </div>
                                      </div>
                                        <?php } else if($or->status == 2){ ?>
                                          <div style="display: flex;">
                                          <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>" style="height: 30px; width: 100px;">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                            <option value="5">Cancel</option>
                                        </select>
                                        <button id="status_<?php echo $or->order_id;?>" class="btn btn-xs" style="display: none;margin-left: 10px; width: 75px;"></button>
                                         <a href="#" id="orderstatus_<?php echo $or->order_id;?>" class="btn btn-gradient-warning btn-xs" style="margin-left: 10px; width: 75px;  height: 30px;">Processing</a>
                                        <button type="button" class="btn btn-gradient-info btn-xs dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; margin-left: 10px;">Print<span class="caret"></span></button>
                                           <ul class="dropdown-menu">
                                            <li><a  href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Invoice</a></li>
                                            <li><a href="javascript:printDiv('print-address-<?php echo $key+1;?>');">Slip Address</a></li>

                                               
                                            </ul>
                                       </div>
                            
                                       
                                        <?php }else if($or->status == 3){ ?>
                                          <div style="display: flex;">
                                          <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>" style="height: 30px; width: 100px;  height: 30px;">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                             <option value="5">Cancel</option>
                                        </select>
                                        <button id="status_<?php echo $or->order_id;?>" class="btn btn-xs" style="display: none;margin-left: 10px; width: 75px;"></button>
                                        <a href="#" id="orderstatus_<?php echo $or->order_id;?>" class="btn btn-gradient-info btn-xs" style="margin-left: 10px; width: 75px;">Shipped</a>
                                        <button type="button" class="btn btn-gradient-info btn-xs dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; margin-left: 10px;">Print<span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                            <li><a  href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Invoice</a></li>
                                            <li><a href="javascript:printDiv('print-address-<?php echo $key+1;?>');">Slip Address</a></li>

                                               
                                            </ul>
                                       </div>
                                        <?php }else if($or->status == 4){ ?>
                                        <a href="#" id="orderstatus_<?php echo $or->order_id;?>" class="btn btn-gradient-success btn-xs" style="margin-left: 107px; padding: 10px; width: 75px;  height: 30px;">Delevered</a>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                          <button type="button" class="btn btn-gradient-info btn-xs dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; margin-left: 10px;">Print<span class="caret"></span></button>
                                           <ul class="dropdown-menu">
                                            <li><a  href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Invoice</a></li>
                                            <li><a href="javascript:printDiv('print-address-<?php echo $key+1;?>');">Slip Address</a></li>

                                               
                                            </ul>
                                        </div>
                                        <?php }else { ?>
                                         <div style="display: flex;">
                                          <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>" style="height: 30px; width: 100px;  height: 30px;">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                             <option value="5">Cancel</option>
                                        </select>
                                        <button id="status_<?php echo $or->order_id;?>" class="btn btn-xs" style="display: none;margin-left: 10px; width: 75px;"></button>
                                        <a href="#" id="orderstatus_<?php echo $or->order_id;?>" class="btn btn-gradient-info btn-xs" style="margin-left: 10px; width: 75px;">Cancel</a>
                                        <button type="button" class="btn btn-gradient-info btn-xs dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; margin-left: 10px;">Print<span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                            <li><a  href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Invoice</a></li>
                                            <li><a href="javascript:printDiv('print-address-<?php echo $key+1;?>');">Slip Address</a></li>

                                               
                                            </ul>
                                       </div>
                                       <?php } ?>
                                        </td>

                                     <td><a href="<?=base_url()?>orders/deleteOrder/<?php echo $or->order_id ;?>" class='btn btn-gradient-info btn-xs' > Delete</a> </td>

                                </tr>



                            <?php }

                        } ?>

                                

                            </tbody>

                        </table>

                        <br>

                        <!--<div class='pagination-container' >
                        <nav>
                          <ul class="pagination" style="justify-content: flex-end;">
                            
                            <li data-page="prev" class="btn btn-sm btn-gradient-danger">
                                     <span> < <span class="sr-only">(current)</span></span>
                                    </li>
                        <li data-page="next" id="prev" class="btn btn-sm btn-gradient-danger">
                                       <span> > <span class="sr-only">(current)</span></span>
                                    </li>
                          </ul>
                        </nav>
                        </div>-->

                    </div>



                    <!-- <div class="footer">

                        <hr>

                        <div class="stats">

                            <i class="fa fa-history"></i> Updated 3 minutes ago

                        </div>

                    </div> -->

                </div>

            </div>

        </div>

    </div>

</div>

<?php if(count($orderData) > 0){
  for ($i=0; $i < count($orderData); $i++) {  
  
  ?>
<div id="print-area-<?php echo $i+1;?>" class="print-area" style="display: none; style: ">
    <div class="content" id="root">
  <div class="container">
        <div style='max-width:900px; margin: auto;' style="padding: 25px;">
  <div style="padding: 25px 20px">
        <div class="logo" style="display: flex;">
      <div class="img_logo" style="width: 55%;">
              <img style="height: 80px;width:  180px;" src="https://yellowmango.in/assets2/images/yellowmango_from_scratch/Logo/yellowmango.png">
          </div>
          <div class="com_address" style="width: 45%;">
              <div class="list1">
                  <ul style="list-style-type: none;padding: 0px;">
                      <li><b>YellowMango</b></li>
                          <li>Mogallur [V], Gudlur [M],</li>
                          <li>Prakasam [Dt],</li>
                          <li>Andhra Pradesh,</li>
                          <li>India -523115</li>
                  </ul>
              </div>
          </div>          
        </div>
        <div class="cust_address" style="display: flex;margin-bottom: 20px;">
          <div class="list2" style="width: 55%;">
              <h1 style="font-size: 18px">INVOICE</h1>
              <div class="list2">
                  <?php $address = $orderData[$i]['address'];
				  
				  
			  
			  $is_gated_community = $orderData[$i]['is_gated_community'];
			  
			  if( $is_gated_community == "1")
			  {
				$name =   ($address['customer_name1']!="") ? $address['customer_name1']." ".$address['last_name1'] : $address['fname']." ".$address['lname'] ; 
				
				$flat_no =  ($address['flat_no']!="") ?  $address['flat_no'] : "";
				$block_no = ($address['block']!="") ?  $address['block'] : "";  
				$appartment =   ($address['appartment']!="") ?  $address['appartment'] : "";  
				$city =   ($orderData[$i]['city']!="") ?  $orderData[$i]['city'] : $address['city1'];
				$pin =   $address['postal_code1'];
				$phone = $address['mobile_number1'];
				$email = $address['email1'];
				
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
				$name =   ($address['customer_name1']!="") ? $address['customer_name1']." ".$address['last_name1'] : $address['fname']." ".$address['lname'] ; 
				$town =   ($address['town_mandal1']!="") ? $address['town_mandal1'] : $orderData[$i]['town_mandal']; 
				$address1 =   ($address['address11']!="") ? $address['address11'] : $orderData[$i]['address1']; 
				$address2 =   ($address['address22']!="") ? $address['address22'] : $orderData[$i]['address2']; 
				
				$pin =   $address['postal_code1'];
				$phone = $address['mobile_number1'];
				$email = $address['email1'];
				
				$content = '<li style="list-style-type: none;">'.$name.'</li>';
				$content .= '<li style="list-style-type: none;">'.$town.' </li>';
				$content .= '<li style="list-style-type: none;">'.$address1.' </li>';
				$content .= '<li style="list-style-type: none;">'.$address2.' </li>';
				$content .= '<li style="list-style-type: none;">'.$pin.' </li>';
				$content .= '<li style="list-style-type: none;">Phone: '.$phone.' </li>';
				$content .= '<li style="list-style-type: none;">Email: '.$email.' </li>';
			  }
			  
			  
				  ?>
                    <ul class="data1" style="list-style-type: none;padding: 0px !important; margin-left: 0px;">
                        <?php echo $content;?>
                    </ul>
              </div>
          </div>
          <div class="list3" style="width: 45%; padding-top: 50px;">
              <ul class="data2" style="padding-left: 0px">
                      <li style="list-style-type: none;">Invoice Number: <b><?php echo $orderData[$i]['address']['order_id'];?></b></li>
                      <li style="list-style-type: none;">Invoice Date: <b><?php echo date('d M, Y', strtotime($orderData[$i]['created_at']));?></b></li>
                      <li style="list-style-type: none;">Order Number: <b><?php echo $orderData[$i]['order_txn']?></b></li>
                      <li style="list-style-type: none;">Order Date: <b><?php echo date('d M, Y', strtotime($orderData[$i]['created_at']));?></b></li>
                      <li style="list-style-type: none;">Payment Method: <b><?php echo ($orderData[$i]['tab'] =="Pay") ? "Paid" : $orderData[$i]['tab'] ;?>
                        </b>

                      </li>
                  </ul>
          </div>
        </div>
    

    <div>
        <table class="container order-table table" style="width: 100%">
            <thead style="background-color: #96588b !important; color: #fff !important">
                <tr class="row1" style="background-color: #96588b; border-bottom: 1px solid #ccc;">
                    <th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff;">Product</th>
                    <th style="background-color: green;background: #000;color: #fff;padding: 12px 5px; text-align: left; color: #fff">Quantity</th>
                    <th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff">Price</th>
                </tr>
            </thead>
            <?php 
            $cartItems = $orderData[$i]['cartData'];
            if($cartItems->num_rows() > 0) {
              foreach ($cartItems->result() as $key => $crt) { ?>
            <tbody>
                <tr>
                    <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;width: 60%;"><?php echo $crt->product_name;?>- 5KG
                        <br /><span style="font-size: 12px; margin: 10px 0px;">Weight: 5kg</span>
                    </td>
                    <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;"><?php echo $crt->quantity;?></td>
                    <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;">₹<?php echo number_format($crt->price,2);?></td>
                </tr>
            </tbody>
        <?php }
         } ?>

        </table>
    </div>
    <div class="cart_sub" style="text-align: end;margin-top: 15px;margin-left: 60%;">
      <div class="subb" style="display: flex;justify-content: end;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; padding: 5px 0px; margin: 0px !important;">
        <p style="margin: 3px 0px !important;padding: 3px 60px 5px 0px;"><b>Sub Total</b></p>
        <p style="margin: 3px 0px !important;padding: 3px 0px;">₹
		<?php 
			$sub_total = $orderData[$i]['sub_total_amount'];
			
			echo number_format($sub_total,2)?></p>
      </div>

      <div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
        <p style="margin: 0px 0px !important;padding: 0px 60px 0px 0px;"><b>Shipping</b></p>
        <p style="margin: 0px 0px !important;padding: 0px 0px;">
          <?php if($orderData[$i]['shipping_fee'] == '0' || $orderData[$i]['shipping_fee'] == ' ') {
                $shipping_fee = 'FREE SHIPPING';
            }else { 
                $shipping_fee = $orderData[$i]['shipping_fee'];
            }?>
          <?php echo $shipping_fee;?></p>
      </div>
	  
	  <?php 
	  if($orderData[$i]['is_gated_community']==1)
	  {
	?>
	  <div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
        <p style="margin: 0px 0px !important;padding: 0px 60px 0px 0px;"><b>Community Discount </b></p>
        <p style="margin: 0px 0px !important;padding: 0px 0px;">
          <?php 
                $community_discount_percentage = $orderData[$i]['community_discount_percentage'];
                $community_discount_val = $orderData[$i]['community_discount_val'];
            
			echo $community_discount_val;?>  </p>
      </div>
	<?php 
	  }
	  ?>
      <div class="subb mainn" style="display: flex;justify-content: end;border-top: 2px solid #000; border-bottom: 2px solid #000;">
        <p style="margin: 3px 0px !important;padding: 5px 60px 5px 0px;"><b>Total</b></p>
        <p style="margin: 3px 0px !important;padding: 5px 0px 5px 30px;"><b>₹<?php echo number_format($orderData[$i]['total_price'],2)?></b></p>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
    
</div>
<?php }
} ?>


<?php if(count($orderData) > 0){
  for ($i=0; $i < count($orderData); $i++) {  ?>
<div id="print-address-<?php echo $i+1;?>" class="print-area" style="display: none">
<div>
        <div class="Invoice-logo" style="display: flex;justify-content: space-between; padding: 10px 25px">
          <!-- <div style="width: 50%">
              <img src="https://yellowmango.in/assets2/images/yellowmango_from_scratch/Logo/yellowmango.png" width="200">
          </div> -->
          
        </div>
        <div class="Invoice-logo" style="display: flex;justify-content: space-between; padding: 10px 25px 10px 0px">
          <div class="list2" style="width: 50%">
            <!-- <h1>Invoice</h1> -->
            <div class="list2">
              <?php 
			  $address = $orderData[$i]['address'];
			  
			  
			  $is_gated_community = $orderData[$i]['is_gated_community'];
			  
			  if( $is_gated_community == "1")
			  {
				$name =   ($address['customer_name1']!="") ? $address['customer_name1']." ".$address['last_name1'] : $address['fname']." ".$address['lname'] ; 
				
				$flat_no =  ($address['flat_no']!="") ?  $address['flat_no'] : "";
				$block_no = ($address['block']!="") ?  $address['block'] : "";  
				$appartment =   ($address['appartment']!="") ?  $address['appartment'] : "";  
				$city =   ($orderData[$i]['city']!="") ?  $orderData[$i]['city'] : $address['city1'];
				$pin =   $address['postal_code1'];
				$phone = $address['mobile_number1'];
				$email = $address['email1'];
				
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
				$name =   ($address['customer_name1']!="") ? $address['customer_name1']." ".$address['last_name1'] : $address['fname']." ".$address['lname'] ; 
				$town =   ($address['town_mandal1']!="") ? $address['town_mandal1'] : $orderData[$i]['town_mandal']; 
				$address1 =   ($address['address11']!="") ? $address['address11'] : $orderData[$i]['address1']; 
				$address2 =   ($address['address22']!="") ? $address['address22'] : $orderData[$i]['address2']; 
				
				$pin =   $address['postal_code1'];
				$phone = $address['mobile_number1'];
				$email = $address['email1'];
				
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
            </div>
          </div>
          
        </div>
</div>

</div>
<?php }
} ?>



<script type="text/javascript">

    function deleteItem() {

    if (confirm("Are you sure you want to remove ?")) {

        return true;

    }

    return false;

}

</script>

<script type="text/javascript">

    function confirmdelevered() {

    if (confirm("Are you sure you want to change the order status ?")) {

        return true;

    }

    return false;

}

</script>



<style type="text/css">

    .table td {

    vertical-align: middle;

    font-size: 0.800rem;

    line-height: 1;

    white-space: nowrap;

}



</style>

<style type="text/css">
  body{

    background-color: #eee; 
}

table th , table td{
    text-align: center;
}

table tr:nth-child(even){
    background-color: #BEF2F5
}

.pagination li:hover{
    cursor: pointer;
}
    /*table tbody tr {
      display: none;
    }*/

</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script >
function printDiv(divName) {
      document.getElementById("privntDIvb").style.display = "block";
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     document.getElementById("privntDIvb").style.display = "none";
}
</script>

<script type="text/javascript">
 /*getPagination('#table-id');


function getPagination(table) {
  var lastPage = 1;

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');            // reset pagination

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //  numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li data-page="' +
                i +
                '" class="btn btn-sm btn-gradient-info">\
                  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
                </li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');          // add active class to the clicked
      limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
    limitPagging();
    })
    .val(5)
    .change();

  // end of on select change

  // END OF PAGINATION
}

function limitPagging(){
  // alert($('.pagination li').length)

  if($('.pagination li').length > 7 ){
      if( $('.pagination li.active').attr('data-page') <= 3 ){
      $('.pagination li:gt(5)').hide();
      $('.pagination li:lt(5)').show();
      $('.pagination [data-page="next"]').show();
    }if ($('.pagination li.active').attr('data-page') > 3){
      $('.pagination li:gt(0)').hide();
      $('.pagination [data-page="next"]').show();
      for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
        $('.pagination [data-page="'+i+'" ]').show();

      }

    }
  }
}

$(function() {
  // Just to append id number for each row
  // $('table tr:eq(0)').prepend('<th> ID </th>');

  var id = 0;

  $('table tr:gt(0)').each(function() {
    id++;
    // $(this).prepend('<td>' + id + '</td>');
  });
});

//  Developed By Yasser Mas
// yasser.mas2@gmail.com
*/
</script>


<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>

<script type="text/javascript">
  function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

   <script type="text/javascript">
     $(document).ready(function(){
     $(document).on('change', '.quantity', function(){
        // location.reload();
          var itemId = $(this).attr('id');
          var aa = itemId.split("_");
          var qty = $('#quantity_'+aa[1]).val();
          var price = $('#status_'+aa[1]);
          var order = $('#orderstatus_'+aa[1]);

          var sst = $('#quantity_'+aa[1]);
          $(price).empty();
          var url = baseurl+'orders/changeQuantity';
              // location.reload();
              $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: 'json',
                  data:{order_id : aa[1], status:qty},
                  success: function (res) {

                      // console.log(res['status']);
                      if(res['status'] == "pass")
                      {

                        if(res['statusdata'] == 'Ordered') {
                          $(price).show();
                          $(order).hide();
                          $(price).css('background-color','#1ccee5');
                          $(price).css('color','white');
                          $(price).append(res['statusdata']);

                        }else if(res['statusdata'] == 'Processing'){
                          $(price).show();
                          $(order).hide();
                          $(price).css('background-color','#ffd500');
                          $(price).css('color','white');
                          $(price).append(res['statusdata']);

                        }else if(res['statusdata'] == 'Shipped') {
                          $(price).show();
                          $(order).hide();
                          $(price).css('background-color','#047edf');
                          $(price).css('color','white');
                          $(price).append(res['statusdata']);

                        } else {
                          $(price).show();
                          $(order).hide();
                          $(sst).hide();
                          $(price).css('background-color','#07cdae');
                          $(price).css('color','white');
                          $(price).append(res['statusdata']);
                        }
                        
                          // console.log(res['statusdata']);// $('.testorder').hide();
                      }
                      else
                      {
                         alert("Out Of Stock");
                         // location.reload();
                      }
                  }
              });
        });


   });
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
</script>


<script type="text/javascript">
  //show all buttons on click
$("#action-button-more").click(function() {
   $(".myGroup").toggleClass("btn-group-vertical");
   $(".special").toggleClass('show-el');
   $(this).html() == "Hide" ? $(this).html("More") : $(this).html("Hide");
});


$("#non_gated_community_radio").on("change",function()
{
	if($(this).is(':checked'))
	{
		$("#is_gated_community_div").css("display","none");
	}	
});

$("#gated_community_radio").on("change",function()
{
	if($(this).is(':checked'))
	{
		$("#is_gated_community_div").css("display","contents");
	}		
});



function downloadOrderExcel()
{
	var gated_community_type = "";
	
	if($("#gated_community_radio").is(':checked'))
	{
		var gated_community_type = "gated";
	}
	
	if($("#non_gated_community_radio").is(':checked'))
	{
		var gated_community_type = "non-gated";
	}
	
	var from = $("#datepicker").val();
	var to = $("#datepicker2").val();
	
	var status = $("#status").val();
	var city = $("#cityChange").val();
	var apt = $("#appartment1").val();
	var consignment_date = $("#consignment_date").val();
	var postal_code1 = $("#postal_code1").val();
	
	var content = "<form action='"+baseurl+"excel' method='post' style='display:none' id='submit_export_form'>";
		content += "<input type='hidden' name='gated_community_type' value='"+gated_community_type+"' >";
		content += "<input type='hidden' name='from_date' value='"+from+"' >";
		content += "<input type='hidden' name='to_date' value='"+to+"' >";
		content += "<input type='hidden' name='status' value='"+status+"' >";
		content += "<input type='hidden' name='city' value='"+city+"' >";
		content += "<input type='hidden' name='appartment' value='"+apt+"' >";
		content += "<input type='hidden' name='consignment_date' value='"+consignment_date+"' >";
		content += "<input type='hidden' name='postal_code1' value='"+postal_code1+"' >";
		content += "<input type='submit'>";
		content += "</form>";
	
	$("body").append(content);
	$("#submit_export_form").submit();	
	
	$("#submit_export_form").remove();
}

function downloadOrderPDF()
{
	var gated_community_type = "";
	
	if($("#gated_community_radio").is(':checked'))
	{
		var gated_community_type = "gated";
	}
	
	if($("#non_gated_community_radio").is(':checked'))
	{
		var gated_community_type = "non-gated";
	}
	
	var from = $("#datepicker").val();
	var to = $("#datepicker2").val();
	var status = $("#status").val();
	var city = $("#cityChange").val();
	var apt = $("#appartment1").val();
	var consignment_date = $("#consignment_date").val();
	var postal_code1 = $("#postal_code1").val();
	
	var content = "<form action='"+baseurl+"pdf' method='post' style='display:none' id='submit_export_form'>";
		content += "<input type='hidden' name='gated_community_type' value='"+gated_community_type+"' >";
		content += "<input type='hidden' name='from_date' value='"+from+"' >";
		content += "<input type='hidden' name='to_date' value='"+to+"' >";
		content += "<input type='hidden' name='status' value='"+status+"' >";
		content += "<input type='hidden' name='city' value='"+city+"' >";
		content += "<input type='hidden' name='appartment' value='"+apt+"' >";
		content += "<input type='hidden' name='consignment_date' value='"+consignment_date+"' >";
		content += "<input type='hidden' name='postal_code1' value='"+postal_code1+"' >";
		content += "<input type='submit'>";
		content += "</form>";
	
	$("body").append(content);
	$("#submit_export_form").submit();	
	
	$("#submit_export_form").remove();
	
}


function downloadProductExcel()
{
	var gated_community_type = "";
	
	if($("#gated_community_radio").is(':checked'))
	{
		var gated_community_type = "gated";
	}
	
	if($("#non_gated_community_radio").is(':checked'))
	{
		var gated_community_type = "non-gated";
	}
	
	var from = $("#datepicker").val();
	var to = $("#datepicker2").val();
	var status = $("#status").val();
	var city = $("#cityChange").val();
	var apt = $("#appartment1").val();
	var consignment_date = $("#consignment_date").val();
	
	var content = "<form action='"+baseurl+"excel/allProducts' method='post' style='display:none' id='submit_export_form'>";
		content += "<input type='hidden' name='gated_community_type' value='"+gated_community_type+"' >";
		content += "<input type='hidden' name='from_date' value='"+from+"' >";
		content += "<input type='hidden' name='to_date' value='"+to+"' >";
		content += "<input type='hidden' name='status' value='"+status+"' >";
		content += "<input type='hidden' name='city' value='"+city+"' >";
		content += "<input type='hidden' name='appartment' value='"+apt+"' >";
		content += "<input type='hidden' name='consignment_date' value='"+consignment_date+"' >";
		content += "<input type='submit'>";
		content += "</form>";
	
	$("body").append(content);
	$("#submit_export_form").submit();	
	
	$("#submit_export_form").remove();
	
}

function downloadProductPDF()
{
	var gated_community_type = "";
	
	if($("#gated_community_radio").is(':checked'))
	{
		var gated_community_type = "gated";
	}
	
	if($("#non_gated_community_radio").is(':checked'))
	{
		var gated_community_type = "non-gated";
	}
	
	var from = $("#datepicker").val();
	var to = $("#datepicker2").val();
	var status = $("#status").val();
	var city = $("#cityChange").val();
	var apt = $("#appartment1").val();
	var consignment_date = $("#consignment_date").val();
	var postal_code1 = $("#postal_code1").val();
	
	var content = "<form action='"+baseurl+"pdf/allProducts' method='post' style='display:none' id='submit_export_form'>";
		content += "<input type='hidden' name='gated_community_type' value='"+gated_community_type+"' >";
		content += "<input type='hidden' name='from_date' value='"+from+"' >";
		content += "<input type='hidden' name='to_date' value='"+to+"' >";
		content += "<input type='hidden' name='status' value='"+status+"' >";
		content += "<input type='hidden' name='city' value='"+city+"' >";
		content += "<input type='hidden' name='appartment' value='"+apt+"' >";
		content += "<input type='hidden' name='consignment_date' value='"+consignment_date+"' >";
		content += "<input type='hidden' name='postal_code1' value='"+postal_code1+"' >";
		content += "<input type='submit'>";
		content += "</form>";
	
	$("body").append(content);
	$("#submit_export_form").submit();	
	
	$("#submit_export_form").remove();
	
}




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


$('#or-table').DataTable();


</script>
