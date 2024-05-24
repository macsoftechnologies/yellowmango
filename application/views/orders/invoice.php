  <style>
      .bond-product p {
        padding: 0px;
      }

      .business-bond p {
        margin-bottom: 7px;
      }

      /*table tr {
        border: 1px solid;
      }*/
      .content {
        background-color: white;
      }

      .bond-left {
        text-align: end;
      }

      .bond-info {
        text-align: center;
      }

      .bond-right {
        text-align: left;
      }
      /*
      .business-bond {
        margin-right: 100px;
      }*/
  </style>
<section style="width: 100%;padding: 10px;">
<div class="content" id="root">
	<div class="container">
        <div style='max-width:900px; margin: auto;' style="padding: 25px;">
	<div style="padding: 25px 20px">
        <div class="logo" style="display: flex;">
			<div class="img_logo" style="width: 60%;">
	            <img style="height: 80px;width:  180px;" src="https://yellowmango.in/assets2/images/yellowmango_from_scratch/Logo/yellowmango.png">
	        </div>
	        <div class="com_address" style="width: 40%;">
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
        	<div class="list2" style="width: 60%;">
	            <h1 style="font-size: 20px; font-weight: bold;">INVOICE</h1>
	            <div class="list2">
					<?php 
					  $is_gated_community = $order['is_gated_community'];
					
					  if( $is_gated_community == "1")
					  {
						$name =   ($address['customer_name1']!="") ? $address['customer_name1']." ".$address['last_name1'] : $address['fname']." ".$address['lname'] ; 
						
						$flat_no =  ($address['flat_no']!="") ?  $address['flat_no'] : "";
						$block_no = ($address['block']!="") ?  $address['block'] : "";  
						$appartment =   ($address['appartment']!="") ?  $address['appartment'] : "";  
						$city =   ($address['city1']!="") ?  $address['city1'] : $address['city1'];
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
						$town =   ($address['town_mandal1']!="") ? $address['town_mandal1'] : ""; 
						$address1 =   ($address['address11']!="") ? $address['address11'] : ""; 
						$address2 =   ($address['address22']!="") ? $address['address22'] : ""; 
						
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
	        <div class="list3" style="width: 40%; padding-top: 50px;">
	            <ul class="data2" style="list-style-type: none; padding-left: 0px;">
	                <li>Invoice Number: &nbsp;&nbsp;<b><?php echo $order['order_id'];?></b></li>
	                <li>Invoice Date: &nbsp;&nbsp;<b><?php echo date('M d,Y',strtotime($order['created_at']));?></b></li>
	                <li>Order Number: &nbsp;&nbsp;<b><?php echo $order['order_txn'];?></b></li>
	                <li>Order Date: &nbsp;&nbsp;<b><?php echo date('M d,Y',strtotime($order['created_at']));?></b></li>
	                <li>Payment Method: &nbsp;&nbsp;<b><?php echo ($order['tab'] =="Pay") ? "Paid" : $order['tab'] ;?></b></li>
	                <!-- <li id="space">delivery</li> -->
	            </ul>
	        </div>
        </div>
    

    <div>
        <table class="container order-table">
            <tr class="row1">
                <th style="background-color: #96588b;color: #fff;padding: 12px 5px;width: 60%;">Product</th>
                <th style="background-color: #96588b;color: #fff;padding: 12px 5px;">Quantity</th>
                <th style="background-color: #96588b;color: #fff;padding: 12px 5px;">Price</th>
            </tr>
            <?php if($cartItems->num_rows() > 0) {
            	foreach ($cartItems->result() as $key => $crt) { ?>
            <tr>
                <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;width: 60%;"><?php echo $crt->product_name;?>- 5KG
                    <br /><span style="font-size: 12px; margin: 10px 0px;">Weight: 5kg</span>
                </td>
                <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;"><?php echo $crt->quantity;?></td>
                <td style="border-bottom: 1px solid #ccc;padding: 10px 5px;">₹<?php echo number_format($crt->price,2);?></td>
            </tr>
        <?php }
         } ?>

        </table>
    </div>
    <div class="cart_sub" style="text-align: end;margin-top: 15px;margin-left: 60%;">
    	<div class="subb" style="display: flex;justify-content: end;border-top: 1px solid #000;border-bottom: 1px solid #000;">
    		<p style="margin-bottom: 0px;padding: 8px 60px 8px 0px;"><b>Sub Total</b></p>
    		<p style="margin-bottom: 0px;padding: 8px 0px;">₹<?php echo number_format($order['total_price'],2);?></p>
    	</div>

    	<div class="subb" style="border-top: 1px solid #fff;display: flex;justify-content: end;border-bottom: 1px solid #000;">
    		<p style="margin-bottom: 0px;padding: 8px 60px 8px 0px;"><b>Shipping</b></p>
    		<p style="margin-bottom: 0px;padding: 8px 0px;"><?php echo $order['shipping_fee'];?></p>
    	</div>
		<?php 
	   if($is_gated_community==1)
	   {
		?>
		  <div class="subb" style="border-top: 1px solid #fff;display: flex;justify-content: end;border-bottom: 1px solid #000;">
			<p style="margin-bottom: 0px;padding: 8px 60px 8px 0px;"><b>Community Discount </b></p>
			<p style="margin-bottom: 0px;padding: 8px 0px;">
			  <?php echo $order['community_discount_val'];?>  </p>
		  </div>
		<?php 
		  }
		  ?>
		  
    	<div class="subb mainn" style="display: flex;justify-content: end;border-top: 1px solid #000; border-bottom: 2px solid #000;">
    		<p style="margin-bottom: 0px;padding: 8px 60px 8px 0px;"><b>Total</b></p>
    		
    		<p style="margin-bottom: 0px;padding: 8px 0px 8px 30px;"><b>₹<?php echo number_format( $order['total_price'],2)?></b></p>
    	</div>
    </div>
 	</div>
</div>
	</div>
</div>
</section>

        <div style="background: white; padding-bottom: 30px;padding-left: 45px; text-align: center;">
    
            <button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="test()"><i class="fa fa-download" ></i> Download PDF</button>
        
        </div>
</div>
<script src="<?=base_url()?>assets/html2pdf.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script>
  function test() {
    // Get the element.
        var doc = new jsPDF('p', 'pt', 'letter');
         doc.setLineWidth(2);
            doc.rect(10, 20, 150, 75);

    var element = document.getElementById('root');

    var name = "<?php echo $order['order_txn'];?>"+".pdf";
     // Generate the PDF.
      var opt = {
        margin: 2,
        filename:  name,
        image: {type: 'jpeg',quality: 0.98},
        html2canvas: {scale: 2},
        jsPDF: {
          unit: 'mm',
          format: [280, 350],
          orientation: 'portrait'
        }
      };

      html2pdf().set(opt).from(element).save();
  
  }
</script>